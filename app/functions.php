<?php
include __DIR__ . '/env.php';

$site = "All Spec Plumbing & Gas";
$phone_number = "03 9122 8978";
$admin_email = 'info@allspecplumbing.com';
$bcc_email = "";
$no_reply_email = 'info@allspecplumbing.com';
$recaptcha_client_secret = $client_secret;
$recaptcha_server_secret = $server_secret;

$services = array(
    [
        'id' => 'service_general_plumbing',
        'name' => 'General Plumbing',
        'icon' => '<svg width="17" height="17" viewBox="0 0 17 17" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M13.4729 5.28594L11.0729 2.88594L13.4729 0.485938C12.9729 0.185937 12.3729 0.0859375 11.7729 0.0859375C9.27293 0.0859375 7.27293 2.08594 7.27293 4.58594C7.27293 5.08594 7.37293 5.48594 7.47293 5.98594L0.872927 10.8859C0.072927 11.4859 0.072927 12.5859 0.672927 13.2859L2.97293 15.6859C3.67293 16.3859 4.77293 16.2859 5.37293 15.4859L10.2729 8.88594C10.7729 8.98594 11.2729 9.08594 11.7729 9.08594C14.2729 9.08594 16.2729 7.08594 16.2729 4.58594C16.2729 3.98594 16.1729 3.38594 15.9729 2.88594L13.4729 5.28594Z" /></svg>',
        'description' => 'Our team of experienced and licensed plumbers are equipped with the latest tools and techniques to diagnose and fix any plumbing issue you may encounter. From leaky taps and clogged drains to water heater installations and sewer line repairs, we are equipped to handle it all.'
    ],
    [
        'id' => 'service_emergency',
        'name' => '24/7 Emergency',
        'icon' => '<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.5319 2.43504C13.7911 1.68957 12.9097 1.09841 11.9389 0.695783C10.968 0.293153 9.92697 0.087042 8.87595 0.0893751H8.87228C6.75113 0.0893749 4.7168 0.931772 3.21661 2.43134C1.71641 3.93091 0.873168 5.96489 0.872284 8.08604C0.872284 8.26285 0.942522 8.43242 1.06755 8.55745C1.19257 8.68247 1.36214 8.75271 1.53895 8.75271C1.71576 8.75271 1.88533 8.68247 2.01036 8.55745C2.13538 8.43242 2.20562 8.26285 2.20562 8.08604C2.2065 6.31851 2.90927 4.62367 4.15942 3.37415C5.40956 2.12463 7.10475 1.42271 8.87228 1.42271H8.87562C10.6437 1.42311 12.3393 2.12587 13.5892 3.37639C14.8392 4.62691 15.5412 6.32277 15.5408 8.09088C15.5404 9.85898 14.8376 11.5545 13.5871 12.8045C12.3366 14.0544 10.6407 14.7564 8.87262 14.756H8.86962C7.60015 14.7513 6.35833 14.3848 5.28962 13.6997L6.37428 12.7797C6.42056 12.7406 6.45529 12.6896 6.47473 12.6322C6.49418 12.5748 6.49761 12.5131 6.48465 12.4539C6.47169 12.3947 6.44283 12.3402 6.40119 12.2961C6.35954 12.2521 6.30668 12.2203 6.24828 12.204L2.45295 11.147C2.40003 11.1323 2.34427 11.1308 2.29065 11.1428C2.23702 11.1548 2.18719 11.1798 2.14559 11.2157C2.10399 11.2516 2.07191 11.2972 2.05219 11.3485C2.03248 11.3998 2.02576 11.4552 2.03262 11.5097L2.51862 15.3744C2.5261 15.434 2.54955 15.4904 2.58649 15.5378C2.62342 15.5852 2.67246 15.6217 2.72843 15.6435C2.7844 15.6652 2.84522 15.6715 2.90446 15.6616C2.96369 15.6516 3.01914 15.6259 3.06495 15.587L4.22762 14.6007C5.58297 15.5659 7.20473 16.0861 8.86862 16.0894H8.87228C10.4543 16.0894 12.0007 15.6205 13.3162 14.7417C14.6317 13.863 15.6571 12.614 16.2629 11.1526C16.8686 9.69122 17.0275 8.08303 16.7194 6.53135C16.4113 4.97967 15.6501 3.55416 14.5319 2.43504Z" fill="#9AC6D7"/><path d="M13.7056 8.58602C13.8382 8.58602 13.9654 8.53334 14.0592 8.43957C14.1529 8.3458 14.2056 8.21863 14.2056 8.08602C14.2056 7.95341 14.1529 7.82623 14.0592 7.73247C13.9654 7.6387 13.8382 7.58602 13.7056 7.58602L9.51662 7.44169L9.37229 3.25269C9.37229 3.12008 9.31961 2.9929 9.22584 2.89913C9.13207 2.80536 9.00489 2.75269 8.87229 2.75269C8.73968 2.75269 8.6125 2.80536 8.51873 2.89913C8.42497 2.9929 8.37229 3.12008 8.37229 3.25269L8.20562 8.08602C8.20562 8.26283 8.27586 8.4324 8.40088 8.55742C8.52591 8.68245 8.69548 8.75269 8.87229 8.75269L13.7056 8.58602Z" fill="#9AC6D7"/></svg>',
        'description' => '24/7 Emergency Service: A plumbing company that offers 24/7 emergency service can provide customers with the assurance that they can rely on their services at any time, day or night. Also having access to 24/7 emergency service can also be particularly important for commercial customers who need to maintain the safety and functionality of their businesses at all times.',
    ],
    [
        'id' => 'service_leaking_pipes',
        'name' => 'Burst & Leaking Pipes',
        'icon' => '<svg width="15" height="16" viewBox="0 0 15 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M14.2635 7.75936H8.93014C8.7458 7.75936 8.5968 7.90869 8.5968 8.09269V10.0927C8.5968 10.644 8.14814 11.0927 7.5968 11.0927C7.04547 11.0927 6.5968 10.644 6.5968 10.0927V6.42603H2.5968V10.0927C2.5968 13.2174 5.1388 15.7594 8.26347 15.7594H8.93014C12.0548 15.7594 14.5968 13.2174 14.5968 10.0927V8.09269C14.5968 7.90869 14.4478 7.75936 14.2635 7.75936Z" /><path d="M7.5968 5.09269H5.93014V2.75936C5.93014 1.47269 4.88314 0.426025 3.5968 0.426025H0.930135C0.745802 0.426025 0.596802 0.575359 0.596802 0.759359V2.75936C0.596802 2.94336 0.745802 3.09269 0.930135 3.09269H2.93014C3.11414 3.09269 3.26347 3.24236 3.26347 3.42603V5.09269H1.5968C1.41247 5.09269 1.26347 5.24203 1.26347 5.42603C1.26347 5.61003 1.41247 5.75936 1.5968 5.75936H7.5968C7.78114 5.75936 7.93014 5.61003 7.93014 5.42603C7.93014 5.24203 7.78114 5.09269 7.5968 5.09269Z" /></svg>',
        'description' => 'At All Spec Plumbing, we offer reliable and efficient burst and leaking pipe services throughout Melbourne. Our experienced and licensed plumbers use advanced equipment and techniques to quickly identify and resolve any issues with your pipes, preventing further damage and inconvenience.'
    ],
    [
        'id' => 'service_blockages',
        'name' => 'Blockages & CCTV Drain Inspections',
        'icon' => '<svg width="15" height="16" viewBox="0 0 15 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M14.2635 7.75936H8.93014C8.7458 7.75936 8.5968 7.90869 8.5968 8.09269V10.0927C8.5968 10.644 8.14814 11.0927 7.5968 11.0927C7.04547 11.0927 6.5968 10.644 6.5968 10.0927V6.42603H2.5968V10.0927C2.5968 13.2174 5.1388 15.7594 8.26347 15.7594H8.93014C12.0548 15.7594 14.5968 13.2174 14.5968 10.0927V8.09269C14.5968 7.90869 14.4478 7.75936 14.2635 7.75936Z" /><path d="M7.5968 5.09269H5.93014V2.75936C5.93014 1.47269 4.88314 0.426025 3.5968 0.426025H0.930135C0.745802 0.426025 0.596802 0.575359 0.596802 0.759359V2.75936C0.596802 2.94336 0.745802 3.09269 0.930135 3.09269H2.93014C3.11414 3.09269 3.26347 3.24236 3.26347 3.42603V5.09269H1.5968C1.41247 5.09269 1.26347 5.24203 1.26347 5.42603C1.26347 5.61003 1.41247 5.75936 1.5968 5.75936H7.5968C7.78114 5.75936 7.93014 5.61003 7.93014 5.42603C7.93014 5.24203 7.78114 5.09269 7.5968 5.09269Z" /></svg>',
        'description' => 'All Spec Plumbing provides fast and effective solutions for blocked drains, using the latest technology to identify and resolve any issues. Our CCTV drain inspections allow us to accurately locate and diagnose any blockages or damage, providing you with a cost-effective solution that will save you time and money in the long run.'
    ],
    [
        'id' => 'service_gas_safety',
        'name' => 'Gas Safety Checks',
        'icon' => '<svg width="12" height="15" viewBox="0 0 12 15" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M5.79175 0.153975C5.722 0.113226 5.64342 0.0899816 5.56272 0.0862323C5.48203 0.0824829 5.40163 0.09834 5.32841 0.132447C5.25518 0.166553 5.19131 0.217893 5.14226 0.282074C5.0932 0.346255 5.06043 0.421364 5.04675 0.500975C4.84676 1.65876 4.37065 2.75128 3.65875 3.68598C3.41258 3.9817 3.14521 4.2591 2.85875 4.51598C2.14687 5.06057 1.56418 5.7558 1.15239 6.5519C0.740594 7.348 0.509875 8.22529 0.476746 9.12098C0.478736 10.118 0.744915 11.0968 1.24818 11.9575C1.75145 12.8182 2.47382 13.5302 3.34175 14.021C3.41677 14.0635 3.50151 14.0859 3.58775 14.086C3.71451 14.0863 3.83665 14.0384 3.92948 13.9521C4.0223 13.8658 4.07887 13.7474 4.08775 13.621C4.10967 13.2932 4.20258 12.974 4.36005 12.6857C4.51753 12.3973 4.7358 12.1466 4.99975 11.951C5.54393 11.5961 5.99519 11.1161 6.31575 10.551C6.80899 10.9216 7.22376 11.3865 7.53601 11.9186C7.84825 12.4508 8.05176 13.0396 8.13475 13.651C8.14527 13.7322 8.1756 13.8097 8.22308 13.8764C8.27055 13.9432 8.33371 13.9973 8.407 14.034C8.48029 14.0706 8.56146 14.0887 8.64337 14.0866C8.72528 14.0845 8.80542 14.0623 8.87675 14.022C9.74467 13.5312 10.467 12.8192 10.9703 11.9585C11.4736 11.0978 11.7398 10.119 11.7417 9.12198C11.7407 5.53298 9.68375 2.43398 5.79175 0.153975Z" /></svg>',
        'description' => "At All Spec Plumbing, we understand the importance of gas safety in the home. That's why we offer comprehensive gas safety checks for residential and commercial customers in Melbourne, ensuring that your gas appliances and systems are operating safely and efficiently."
    ],
    [
        'id' => "service_water_leak_detection",
        'name' => "Water Leak Detection",
        'icon' => '',
        'description' => "At All Spec Plumbing, we use advanced technology and equipment to detect leaks quickly and accurately. Our team of experienced plumbers can detect leaks in walls, floors, and ceilings, as well as underground and in hard-to-reach areas. Our leak detection services are non-invasive, meaning we don't need to dig up your property to find the source of the leak. We use techniques such as thermal imaging, acoustic detection, and moisture meters to locate the leak without causing any damage to your property."
    ],
    [
        'id' => "service_bathroom_renovation",
        'name' => "Bathroom Renovation",
        'icon' => '',
        'description' => "All Spec Plumbing offers professional bathroom renovation services to transform your old and outdated bathroom into a modern and functional space. Our team of experienced plumbers and renovators can handle every aspect of the project, from design to installation, ensuring a hassle-free and high-quality result."
    ],
    [
        'id' => "service_hot_water_system",
        'name' => "Hot Water System Installation",
        'icon' => '',
        'description' => "All Spec Plumbing provides comprehensive hot water system installation services for residential and commercial properties throughout Melbourne. Our licensed and experienced plumbers can recommend and install the best hot water system for your needs, ensuring efficient and reliable hot water supply."
    ],
    [
        'id' => "service_hot_water_repairs",
        'name' => "Hot Water System Maintenance & Repairs",
        'icon' => '',
        'description' => "At All Spec Plumbing, we offer expert hot water system maintenance and repair services to keep your system running smoothly. Our team of licensed and experienced plumbers can diagnose and fix any issues with your hot water system, ensuring you have access to hot water when you need it."
    ],
    [
        'id' => "service_roof_plumbing",
        'name' => "Roof Plumbing",
        'icon' => '',
        'description' => "All Spec Plumbing offers professional and reliable roof plumbing services for residential and commercial properties in Melbourne. Our team of licensed and experienced roof plumbers can handle everything from roof repairs and gutter cleaning to downpipe installation and roof leak detection."
    ],
    [
        'id' => "service_water_filter_installation",
        'name' => "Water Filter Installations ",
        'icon' => '',
        'description' => "All Spec Plumbing provides top-quality water filter installation services for homeowners and businesses in Melbourne. Our team of licensed plumbers can recommend and install the right water filtration system to ensure clean and safe drinking water for you and your family."
    ]
);

function renderImg($filename, $folder, $classname = "")
{
    $filename_without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
    $src = "./assets/images/" . $folder . "/" . $filename;

    if (file_exists("./assets/images/" . $folder . "/" . $filename_without_ext . ".webp")) {
        $src = "./assets/images/" . $folder . "/" . $filename_without_ext . ".webp";
    }

    return "<img src=" . $src . " alt=" . $filename_without_ext . " class='" . $classname . "'>";
}
