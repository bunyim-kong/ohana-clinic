<?php
/**
 * Plugin Name: Doctor Schedule Calendar
 * Description: Manage doctor availability with calendar view.
 * Version: 1.1
 * Author: ChatGPT
 */
if (!defined('ABSPATH')) exit;

// ------------------------
// 1. Register Doctor CPT
// ------------------------
add_action('init', function () {
    register_post_type('doctor', [
        'labels' => [
            'name' => 'Doctors',
            'singular_name' => 'Doctor',
        ],
        'public' => true,
        'menu_icon' => 'dashicons-businessman',
        'supports' => ['title'],
    ]);
});

// ------------------------
// 2. Add Meta Box
// ------------------------
add_action('add_meta_boxes', function () {
    add_meta_box(
        'doctor_schedule',
        'Doctor Weekly Schedule',
        'doctor_schedule_cb',
        'doctor',
        'normal',
        'default'
    );
});

function doctor_schedule_cb($post) {
    $schedule = get_post_meta($post->ID, '_doctor_schedule', true) ?: [];
    
    wp_nonce_field('doctor_schedule_nonce', 'doctor_schedule_nonce_field');

    $days = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];

    echo '<table style="width:100%; border-collapse: collapse;">';
    echo '<tr><th>Day</th><th>Not Available</th><th>Start Time</th><th>End Time</th></tr>';

    foreach($days as $day) {
        $start = $schedule[$day]['start'] ?? '';
        $end   = $schedule[$day]['end'] ?? '';
        $off   = !empty($schedule[$day]['off']);

        echo '<tr>';
        echo "<td><strong>{$day}</strong></td>";
        echo "<td><input type='checkbox' name='schedule[{$day}][off]' " . checked($off,true,false) . "></td>";
        echo "<td><input type='time' name='schedule[{$day}][start]' value='" . esc_attr($start) . "'></td>";
        echo "<td><input type='time' name='schedule[{$day}][end]' value='" . esc_attr($end) . "'></td>";
        echo '</tr>';
    }
    echo '</table>';
}

// ------------------------
// 3. Save Meta Box Data
// ------------------------
add_action('save_post', function($post_id){
    if (!isset($_POST['doctor_schedule_nonce_field']) || !wp_verify_nonce($_POST['doctor_schedule_nonce_field'], 'doctor_schedule_nonce')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;

    if(isset($_POST['schedule']) && is_array($_POST['schedule'])){
        $clean_schedule = [];
        foreach($_POST['schedule'] as $day => $data){
            $clean_schedule[$day] = [
                'start' => sanitize_text_field($data['start'] ?? ''),
                'end'   => sanitize_text_field($data['end'] ?? ''),
                'off'   => !empty($data['off']) ? 1 : 0,
            ];
        }
        update_post_meta($post_id,'_doctor_schedule',$clean_schedule);
    }
});

// ------------------------
// 4. Include shortcode file
// ------------------------
require_once plugin_dir_path(__FILE__) . 'public/shortcode.php';
