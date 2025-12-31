<?php
add_shortcode('doctor_calendar', function($atts){
    $atts = shortcode_atts(['id'=>'all'],$atts);

    // Get doctors
    if($atts['id'] === 'all'){
        $doctors = get_posts(['post_type'=>'doctor','numberposts'=>-1, 'post_status'=>'publish']);
        if(!$doctors) return '<p>No doctors found</p>';
    } else {
        $post = get_post(intval($atts['id']));
        if(!$post) return '<p>Doctor not found</p>';
        $doctors = [$post];
    }

    $events = [];

    // Build events and HTML table
    $html_table .= '<table border="1" cellpadding="5">';
    $html_table .= '<tr><th>Doctor</th><th>Day</th><th>Start</th><th>End</th></tr>';

    foreach($doctors as $doctor){
        $schedule = get_post_meta($doctor->ID,'_doctor_schedule',true);
        if(!$schedule || !is_array($schedule)) continue;

        foreach($schedule as $day => $data){
            if(empty($data['off']) && !empty($data['start']) && !empty($data['end'])){
                // Add to FullCalendar events
                $events[] = [
                    'title' => $doctor->post_title.' - Available',
                    'daysOfWeek' => [ date('w', strtotime($day)) ],
                    'startTime' => $data['start'],
                    'endTime' => $data['end'],
                    'url' => get_permalink($doctor->ID),
                    'color' => '#28a745'
                ];

                // Add to HTML table
                $html_table .= '<tr>';
                $html_table .= '<td>'.$doctor->post_title.'</td>';
                $html_table .= '<td>'.$day.'</td>';
                $html_table .= '<td>'.$data['start'].'</td>';
                $html_table .= '<td>'.$data['end'].'</td>';
                $html_table .= '</tr>';
            }
        }
    }

    $html_table .= '</table>';

    if(empty($events)) return $html_table.'<p>No schedules available for the calendar</p>';

    // Enqueue FullCalendar
    wp_enqueue_style('fullcalendar-css','https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/main.min.css');
    wp_enqueue_script('fullcalendar-js','https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js',[],null,true);

    $calendar_id = 'doctor-calendar-'.uniqid();

    ob_start(); ?>
    <?php echo $html_table; ?>
    <div id="<?php echo esc_attr($calendar_id); ?>" style="margin-top:20px;"></div>
    <script>
    document.addEventListener('DOMContentLoaded', function(){
        var calendarEl = document.getElementById('<?php echo esc_js($calendar_id); ?>');
        if(!calendarEl) return;
        var calendar = new FullCalendar.Calendar(calendarEl,{
            initialView:'timeGridWeek',
            slotMinTime:'06:00:00',
            slotMaxTime:'22:00:00',
            height:'auto',
            events: <?php echo json_encode($events); ?>
        });
        calendar.render();
    });
    </script>
    <?php

    return ob_get_clean();
});
