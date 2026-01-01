<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/pages/calendar.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">

<?php
get_header();

$days = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];

$query = new WP_Query([
    'post_type'      => 'doctor',
    'posts_per_page' => -1,
]);

function format_time_ampm($time_24) {
    return $time_24 ? date('g:i A', strtotime($time_24)) : '';
}
?>

<div class="clinic-schedule container">
    <div class="clinic-schedule-head">
        <h1>Clinic Doctor Schedule</h1>
    </div>

    <?php if ($query->have_posts()) : ?>
        <table class="clinic-schedule-table">
            <thead>
                <tr>
                    <th>Doctor</th>
                    <?php foreach ($days as $day) : ?>
                        <th><?php echo esc_html($day); ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>

            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <?php
                $schedule = get_post_meta(get_the_ID(), '_doctor_schedule', true);
                ?>
                <tr>
                    <td>Doctor <?php the_title(); ?></td>

                    <?php foreach ($days as $day) : ?>
                        <td>
                            <?php
                            if (
                                empty($schedule[$day]) ||
                                !empty($schedule[$day]['off'])
                            ) {
                                echo '<span class="schedule-off">Off</span>';
                            } else {
                                $start_raw = $schedule[$day]['start'] ?? '';
                                $end_raw   = $schedule[$day]['end'] ?? '';

                                $start = '';
                                $end = '';

                                if ($start_raw) {
                                    $dt = DateTime::createFromFormat('H:i', $start_raw);
                                    if ($dt) $start = $dt->format('g:i A');
                                }

                                if ($end_raw) {
                                    $dt = DateTime::createFromFormat('H:i', $end_raw);
                                    if ($dt) $end = $dt->format('g:i A');
                                }

                                if ($start && $end) {
                                    echo '<span class="schedule-on">' . $start . ' – ' . $end . '</span>';
                                } else {
                                    echo '<span style="color:gray;">—</span>';
                                }
                            }
                            ?>
                        </td>
                    <?php endforeach; ?>
                </tr>
            <?php endwhile; ?>

            </tbody>
        </table>

    <?php else : ?>
        <p>No doctors found.</p>
    <?php endif; ?>

</div>

<br><br><br>

<?php
wp_reset_postdata();
get_footer();
