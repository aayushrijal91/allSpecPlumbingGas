<header>
    <div class="mobile-navigation d-xl-none py-2 bg-primary-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col row align-items-center g-1">
                    <div class="col-auto"><?= renderImg('thumbsup.png', 'icons') ?></div>
                    <div class=" col fs-14 lh-1 text-white">
                        <div class="fw-700">Expert solutions,</div> exceptional service
                    </div>
                </div>
                <div class="col-auto">
                    <a href="tel:<?= $phone_number ?>" class="btn btn-secondary rounded-pill text-white py-3 px-md-5 fs-14">
                        Call Us <span class="ps-2 fw-700"><?= $phone_number ?></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="navigation py-3 d-none d-xl-block">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center">
                <div class="col-auto">
                    <a href="./">
                        <?= renderImg("logo.png", "logo") ?>
                    </a>
                </div>
                <div class="col-auto">
                    <div class="row align-items-center gx-xl-5">
                        <div class="col-auto d-flex align-items-center gap-3">
                            <div><?= renderImg('industry-years.png', 'icons') ?></div>
                            <div class="fs-14 lh-1 text-white">
                                Expertise: <span class="fw-700">Industry<br> for 10+ years</span>
                            </div>
                        </div>
                        <div class="col-auto d-flex align-items-center gap-3">
                            <div><?= renderImg('thumbsup.png', 'icons') ?></div>
                            <div class="fs-14 lh-1 text-white">
                                <div class="fw-700">Expert solutions,</div> exceptional service
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="row align-items-center bg-white rounded-pill gx-0">
                                <div class="col-12 col-md-auto">
                                    <a href="#form" class="btn rounded-0 text-secondary py-3 ps-5 pe-4">
                                        Contact Us
                                    </a>
                                </div>
                                <div class="col-12 col-md-auto">
                                    <a href="tel:<?= $phone_number ?>" class="btn btn-secondary rounded-pill text-white py-3 px-md-5">
                                        Call Us <span class="ps-2 fw-700"><?= $phone_number ?></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="banner">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-5 text-white">
                    <div class="d-xl-none pb-4"><a href="./"><?= renderImg('logo.png', 'logo') ?></a></div>
                    <h1 class="heading font-articulat-heavy fs-58 lh-1 fw-800">Reliable plumbing solutions, <span class="text-secondary">every time</span></h1>
                    <div class="fs-18 pb-3 d-none d-md-block">Local Melbourne plumbing experts with unbeatable rates</div>
                    <div class="row justify-content-between py-4 algin-items-center">
                        <div class="col-4">
                            <div class="d-none d-md-block">Clients & Brands</div>
                            <div id="client-slider">
                                <div><?= renderImg('client-1.png', 'logo') ?></div>
                                <div><?= renderImg('client-2.png', 'logo') ?></div>
                                <div><?= renderImg('client-3.png', 'logo') ?></div>
                                <div><?= renderImg('client-4.png', 'logo') ?></div>
                                <div><?= renderImg('client-5.png', 'logo') ?></div>
                                <div><?= renderImg('client-6.png', 'logo') ?></div>
                                <div><?= renderImg('client-7.png', 'logo') ?></div>
                                <div><?= renderImg('client-8.png', 'logo') ?></div>
                            </div>
                            <div class="d-md-none fs-13 fw-700">Clients & Brands</div>
                        </div>
                        <div class="col-7 d-md-none fs-14">
                            Local Melbourne plumbing experts with unbeatable rates
                        </div>
                        <div class="col-8 d-none d-md-block">
                            <div class="gradient-line"></div>
                            <div class="py-3 text-center text-orange fs-24 lh-1">
                                Free plumbing home inspection
                                <div class="fw-700">after every job completed</div>
                            </div>
                            <div class="gradient-line"></div>
                        </div>
                    </div>

                    <div class="d-md-none pb-5">
                        <div class="gradient-line"></div>
                        <div class="py-3 text-center text-orange fs-29 lh-1">
                            Free plumbing home inspection
                            <div class="fw-700">after every job completed</div>
                        </div>
                        <div class="gradient-line"></div>
                    </div>

                    <div class="banner_box_1 d-none d-xl-block">
                        <div class="cheque"><?= renderImg('cheque.png', 'icons') ?></div>
                        Tap Service Repairs <span class="text-secondary">From $79*</span>
                    </div>

                    <div class="cta_wrapper d-none d-xl-block">
                        <div class="row justify-content-between">
                            <div class="col-3">
                                <div class="cta-card">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M29.3475 5.99999C25.9568 5.99999 20.5415 3.18399 16.9475 0.399986C16.2597 -0.136014 15.3103 -0.136014 14.6225 0.399986C11.0284 3.18399 5.6131 5.99999 2.22247 5.99999C1.15297 5.99999 0.284973 6.89399 0.284973 7.99999C0.284973 19.168 5.51816 27.634 15.0216 31.838C15.2657 31.946 15.5253 32 15.785 32C16.0446 32 16.3042 31.946 16.5483 31.838C26.0518 27.634 31.285 19.168 31.285 7.99999C31.285 6.89399 30.417 5.99999 29.3475 5.99999ZM15.785 27.808V16H5.35347C4.73735 14.096 4.34404 12.038 4.21229 9.81399C7.94779 9.16399 12.3672 6.88999 15.785 4.45999V16H26.2165C24.5153 21.268 21.0046 25.286 15.785 27.808Z" fill="white" />
                                    </svg>
                                    <div><span class="fw-700">Life Time</span><br>Warranty</div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="cta-card">
                                    <svg width="28" height="27" viewBox="0 0 28 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21.9641 27H1.71405C0.70155 27 0.0265503 26.325 0.0265503 25.3125V1.6875C0.0265503 0.675 0.70155 0 1.71405 0H21.9641V3.375H3.40155V23.625H20.2766V21.9375H23.6516V25.3125C23.6516 26.325 22.9766 27 21.9641 27Z" fill="white" />
                                        <path d="M27.0266 10.125C27.0266 7.25625 24.8328 5.0625 21.9641 5.0625C19.0953 5.0625 16.9016 7.25625 16.9016 10.125C16.9016 11.6438 17.5766 12.9937 18.5891 13.8375V20.25L21.9641 16.875L25.3391 20.25V13.8375C26.3516 12.9937 27.0266 11.6438 27.0266 10.125Z" fill="white" />
                                        <path d="M13.5266 8.4375H6.77655V11.8125H13.5266V8.4375Z" fill="white" />
                                        <path d="M15.2141 15.1875H6.77655V18.5625H15.2141V15.1875Z" fill="white" />
                                    </svg>
                                    <div><span class="fw-700">Licensed</span> &<br>Insured</div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="cta-card">
                                    <svg width="29" height="28" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.2681 28C11.4992 28 8.79244 27.1789 6.49015 25.6406C4.18786 24.1022 2.39345 21.9157 1.33382 19.3576C0.274193 16.7994 -0.00305331 13.9845 0.53714 11.2687C1.07733 8.55301 2.4107 6.05845 4.36864 4.10051C6.32657 2.14258 8.82114 0.809206 11.5369 0.269012C14.2526 -0.271181 17.0675 0.006066 19.6257 1.06569C22.1839 2.12532 24.3704 3.91973 25.9087 6.22202C27.4471 8.52431 28.2681 11.2311 28.2681 14C28.2644 17.7119 26.7882 21.2707 24.1635 23.8954C21.5388 26.5201 17.98 27.9963 14.2681 28ZM14.2681 4.66667C12.4222 4.66667 10.6177 5.21406 9.08281 6.23962C7.54795 7.26518 6.35168 8.72285 5.64526 10.4283C4.93884 12.1337 4.75401 14.0104 5.11414 15.8209C5.47427 17.6313 6.36318 19.2944 7.66847 20.5997C8.97376 21.905 10.6368 22.7939 12.4473 23.154C14.2578 23.5141 16.1344 23.3293 17.8398 22.6229C19.5453 21.9165 21.003 20.7202 22.0285 19.1853C23.0541 17.6505 23.6015 15.846 23.6015 14C23.6015 11.5247 22.6181 9.15068 20.8678 7.40034C19.1175 5.65 16.7435 4.66667 14.2681 4.66667Z" fill="white" />
                                        <path d="M20.1015 15.1667H14.2681C13.9587 15.1667 13.662 15.0438 13.4432 14.825C13.2244 14.6062 13.1015 14.3094 13.1015 14V8.16667C13.1015 7.85725 13.2244 7.5605 13.4432 7.34171C13.662 7.12292 13.9587 7 14.2681 7C14.5775 7 14.8743 7.12292 15.0931 7.34171C15.3119 7.5605 15.4348 7.85725 15.4348 8.16667V12.8333H20.1015C20.4109 12.8333 20.7076 12.9563 20.9264 13.175C21.1452 13.3938 21.2681 13.6906 21.2681 14C21.2681 14.3094 21.1452 14.6062 20.9264 14.825C20.7076 15.0438 20.4109 15.1667 20.1015 15.1667Z" fill="white" />
                                    </svg>
                                    <div><span class="fw-700">24 Hour</span><br>Response Time</div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="cta-card">
                                    <svg width="28" height="26" viewBox="0 0 28 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M23.0098 4.33333V1.08333C23.0098 0.796016 22.8912 0.520465 22.6803 0.317301C22.4693 0.114137 22.1831 0 21.8848 0L19.6348 0C19.3364 0 19.0502 0.114137 18.8393 0.317301C18.6283 0.520465 18.5098 0.796016 18.5098 1.08333V4.33333H9.50977V1.08333C9.50977 0.796016 9.39124 0.520465 9.18026 0.317301C8.96928 0.114137 8.68313 0 8.38477 0L6.13477 0C5.8364 0 5.55025 0.114137 5.33927 0.317301C5.12829 0.520465 5.00977 0.796016 5.00977 1.08333V4.33333C3.81629 4.33333 2.6717 4.78988 1.82779 5.60254C0.983871 6.41519 0.509766 7.5174 0.509766 8.66667L0.509766 21.6667C0.509766 22.8159 0.983871 23.9181 1.82779 24.7308C2.6717 25.5435 3.81629 26 5.00977 26H23.0098C24.2032 26 25.3478 25.5435 26.1917 24.7308C27.0357 23.9181 27.5098 22.8159 27.5098 21.6667V8.66667C27.5098 7.5174 27.0357 6.41519 26.1917 5.60254C25.3478 4.78988 24.2032 4.33333 23.0098 4.33333ZM23.0098 21.6667H5.00977V10.8333H23.0098V21.6667Z" fill="white" />
                                    </svg>

                                    <div><span class="fw-700">Same Day</span><br>Response</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-9">
                            <div id="inspection_slider_P">
                                <div class="inspection_slider flame_1">
                                    <div>
                                        <div class="text-white fs-51 fw-700 lh-1 pb-4">$70 <span class="text-primary">Discount Online</span></div>
                                        <a href="#form" class="btn btn-white d-inline-flex text-secondary rounded-pill px-5">Contact Us</a>
                                    </div>
                                </div>
                                <div class="inspection_slider flame_2">
                                    <div>
                                        <div class="text-secondary fs-51 fw-700 lh-1 pb-4">Blocked Drains<br> From <span class="text-white">$79</span></div>
                                        <a href="#form" class="btn btn-white d-inline-flex text-secondary rounded-pill px-5">Contact Us</a>
                                    </div>
                                </div>
                                <div class="inspection_slider flame_3">
                                    <div>
                                        <div class="text-white fs-51 fw-700 lh-1 pb-4">$150 <span class="text-primary">Discount Hot Water Systems</span></div>
                                        <a href="#form" class="btn btn-white d-inline-flex text-secondary rounded-pill px-5">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="banner_box_1 d-xl-none">
                <div class="cheque"><?= renderImg('cheque.png', 'icons') ?></div>
                <div>
                    Tap Service Repairs <span class="text-secondary">From $79*</span>
                </div>
            </div>
            <div class="cta_wrapper d-xl-none">
                <div class="row justify-content-between gx-1 gx-md-0">
                    <div class="col col-md-auto">
                        <div class="cta-card">
                            <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.4012 4.55898C17.2536 4.55898 13.8235 2.7753 11.547 1.01189C11.1113 0.672386 10.51 0.672386 10.0743 1.01189C7.79778 2.7753 4.36768 4.55898 2.22003 4.55898C1.5426 4.55898 0.992798 5.12525 0.992798 5.8258C0.992798 12.8997 4.30754 18.2621 10.3271 20.925C10.4817 20.9934 10.6462 21.0276 10.8106 21.0276C10.9751 21.0276 11.1395 20.9934 11.2942 20.925C17.3137 18.2621 20.6285 12.8997 20.6285 5.8258C20.6285 5.12525 20.0787 4.55898 19.4012 4.55898ZM10.8106 18.3723V10.8931H4.20323C3.81297 9.68705 3.56384 8.3835 3.48039 6.9748C5.84649 6.56308 8.6458 5.12271 10.8106 3.58353V10.8931H17.418C16.3405 14.2299 14.1168 16.7749 10.8106 18.3723Z" fill="white" />
                            </svg>
                            <div><span class="fw-700">Life Time</span><br>Warranty</div>
                        </div>
                    </div>
                    <div class="col col-md-auto">
                        <div class="cta-card">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.7034 17.7606H1.87686C1.23553 17.7606 0.807983 17.333 0.807983 16.6917V1.72745C0.807983 1.08612 1.23553 0.658569 1.87686 0.658569H14.7034V2.79632H2.94574V15.6228H13.6345V14.554H15.7723V16.6917C15.7723 17.333 15.3447 17.7606 14.7034 17.7606Z" fill="white" />
                                <path d="M17.91 7.0718C17.91 5.25471 16.5204 3.86517 14.7033 3.86517C12.8862 3.86517 11.4967 5.25471 11.4967 7.0718C11.4967 8.03379 11.9243 8.88889 12.5656 9.42333V13.4851L14.7033 11.3473L16.8411 13.4851V9.42333C17.4824 8.88889 17.91 8.03379 17.91 7.0718Z" fill="white" />
                                <path d="M9.35888 6.00293H5.08337V8.14068H9.35888V6.00293Z" fill="white" />
                                <path d="M10.4278 10.2784H5.08337V12.4162H10.4278V10.2784Z" fill="white" />
                            </svg>


                            <div><span class="fw-700">Licensed</span> &<br>Insured</div>
                        </div>
                    </div>
                    <div class="col col-md-auto">
                        <div class="cta-card">
                            <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.90703 18.394C7.15316 18.394 5.43868 17.8739 3.98039 16.8995C2.5221 15.9251 1.3855 14.5402 0.714325 12.9198C0.0431489 11.2995 -0.132461 9.51645 0.209701 7.79628C0.551864 6.07612 1.39643 4.49604 2.6366 3.25587C3.87678 2.01569 5.45685 1.17113 7.17702 0.828964C8.89719 0.486801 10.6802 0.662412 12.3006 1.33359C13.9209 2.00476 15.3059 3.14136 16.2803 4.59965C17.2547 6.05794 17.7747 7.77242 17.7747 9.52629C17.7724 11.8774 16.8374 14.1316 15.1749 15.7941C13.5123 17.4566 11.2582 18.3917 8.90703 18.394ZM8.90703 3.61448C7.73778 3.61448 6.59479 3.9612 5.6226 4.6108C4.65041 5.2604 3.89268 6.1837 3.44523 7.26394C2.99778 8.34418 2.8807 9.53285 3.10881 10.6796C3.33692 11.8264 3.89996 12.8798 4.72675 13.7066C5.55353 14.5334 6.60691 15.0964 7.75369 15.3245C8.90047 15.5526 10.0891 15.4355 11.1694 14.9881C12.2496 14.5406 13.1729 13.7829 13.8225 12.8107C14.4721 11.8385 14.8188 10.6955 14.8188 9.52629C14.8188 7.95838 14.196 6.45469 13.0873 5.34601C11.9786 4.23733 10.4749 3.61448 8.90703 3.61448Z" fill="white" />
                                <path d="M12.6021 10.2652H8.90719C8.7112 10.2652 8.52324 10.1874 8.38465 10.0488C8.24607 9.91022 8.16821 9.72225 8.16821 9.52627V5.83138C8.16821 5.63539 8.24607 5.44743 8.38465 5.30885C8.52324 5.17026 8.7112 5.09241 8.90719 5.09241C9.10318 5.09241 9.29114 5.17026 9.42972 5.30885C9.56831 5.44743 9.64617 5.63539 9.64617 5.83138V8.78729H12.6021C12.7981 8.78729 12.986 8.86515 13.1246 9.00373C13.2632 9.14232 13.341 9.33028 13.341 9.52627C13.341 9.72225 13.2632 9.91022 13.1246 10.0488C12.986 10.1874 12.7981 10.2652 12.6021 10.2652Z" fill="white" />
                            </svg>
                            <div><span class="fw-700">24 Hour</span><br>Response Time</div>
                        </div>
                    </div>
                    <div class="col col-md-auto">
                        <div class="cta-card">
                            <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.5894 3.14066V0.989143C15.5894 0.798938 15.511 0.616523 15.3713 0.482027C15.2316 0.347532 15.0422 0.271973 14.8447 0.271973H13.3552C13.1576 0.271973 12.9682 0.347532 12.8285 0.482027C12.6889 0.616523 12.6104 0.798938 12.6104 0.989143V3.14066H6.65237V0.989143C6.65237 0.798938 6.5739 0.616523 6.43424 0.482027C6.29457 0.347532 6.10514 0.271973 5.90762 0.271973H4.41811C4.22059 0.271973 4.03116 0.347532 3.89149 0.482027C3.75182 0.616523 3.67335 0.798938 3.67335 0.989143V3.14066C2.88327 3.14066 2.12554 3.44289 1.56687 3.98087C1.0082 4.51886 0.694336 5.24852 0.694336 6.00934L0.694336 14.6154C0.694336 15.3762 1.0082 16.1059 1.56687 16.6439C2.12554 17.1818 2.88327 17.4841 3.67335 17.4841H15.5894C16.3795 17.4841 17.1372 17.1818 17.6959 16.6439C18.2546 16.1059 18.5684 15.3762 18.5684 14.6154V6.00934C18.5684 5.24852 18.2546 4.51886 17.6959 3.98087C17.1372 3.44289 16.3795 3.14066 15.5894 3.14066ZM15.5894 14.6154H3.67335V7.44368H15.5894V14.6154Z" fill="white" />
                            </svg>
                            <div><span class="fw-700">Same Day</span><br>Response</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="form" id="form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="heading fs-64 fw-800 text-black text-center lh-1 pb-2"><span class="text-primary">Affordable plumbing</span> solutions for every budget</div>
                <div class="fs-18 text-dark text-center lh-2 py-4">Looking for expert plumbing advice? Contact us today and let our team of professionals assist you!</div>
            </div>
        </div>

        <div class="row pt-md-5 gx-xl-5 gy-3 gy-md-4">
            <div class="col-lg-6">
                <div class="form_box_wrapper">
                    <div class="form_box">
                        <div class="cheque"><?= renderImg('cheque.png', 'icons') ?></div>
                        <div class="text-primary">7 Years Guarantee <span class="text-secondary">On All Works Done</span></div>
                        <div class="fs-16 fw-500 text-quarternary sub-text pt-2">Our team value our customers satisfaction as our top priority. Each job is complete by our qualified tradesman.</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <form action="./src/form" method="POST">
                    <input type="hidden" name="token" id="recaptchaResponse" class="recaptchaResponse">
                    <div class="row gy-3">
                        <div class="col-12">
                            <input type="text" class="form-control" placeholder="Your Full Name" name="fullName" required />
                        </div>
                        <div class="col-md-6 col-lg-12 col-xl-6">
                            <input type="email" class="form-control" placeholder="Your Email" name="email" required />
                        </div>
                        <div class="col-md-6 col-lg-12 col-xl-6">
                            <input type="tel" class="form-control" placeholder="Your Number" name="phoneNumber" required />
                        </div>
                        <div class="col-12">
                            <select name="service" class="form-control form-select" required>
                                <option selected disabled>Service Required</option>
                                <option>General Plumbing</option>
                                <option>247 Emergency</option>
                                <option>Burst & Leaking Pipes</option>
                                <option>Blockages</option>
                                <option>CCTV inspections</option>
                                <option>Gas safety checks</option>
                                <option>Water leak detection</option>
                                <option>Water leak repairs</option>
                                <option>Bathroom renovations</option>
                                <option>HWS installations</option>
                                <option>HWS maintenance repairs</option>
                                <option>Roofing</option>
                                <option>Roofing Leaks</option>
                                <option>Water filter installations</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <input type="text" name="message" class="form-control" placeholder="Your Message" />
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn form-control text-white">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="about">
    <div class="container">
        <div class="about_box contain">
            <div class="inner contain">
                <div class="row">
                    <div class="col-lg-6 position-relative d-flex justify-content-center order-2 order-lg-1">
                        <?= renderImg('about_1_guys.png', 'lib', 'person-img') ?>
                    </div>
                    <div class="col-lg-6 col-xl-5 order-1 order-lg-2">
                        <div class="py-5 pb-md-6 px-4 px-lg-3 px-xl-0">
                            <div class="rounded-pill bg-secondary text-orange px-4 py-3 d-inline-flex lh-1">
                                <div><span class="fw-700">Blocked Drains</span> From $79</div>
                            </div>
                            <div class="heading text-primary fs-54 fw-700 lh-1 pt-3">
                                Expert solutions<br class="d-none d-xl-block" />
                                <span class="text-secondary-dark">for all your<br class="d-none d-xl-block" /> plumbing needs</span>
                            </div>
                            <div class="lh-2 text-quarternary py-4">
                                A plumbing company that has experienced and qualified plumbers on staff can provide customers with peace of mind that their plumbing problems will be handled professionally and efficiently.
                            </div>
                            <div class="row d-md-inline-flex align-items-center bg-white rounded-pill gx-0">
                                <div class="col col-md-auto">
                                    <a href="#form" class="btn rounded-0 text-secondary py-3 px-md-5">
                                        Contact Us
                                    </a>
                                </div>
                                <div class="col-auto">
                                    <a href="tel:<?= $phone_number ?>" class="btn btn-secondary rounded-pill text-white py-3 px-4 px-md-5">
                                        Call Us <span class="ps-2 fw-700"><?= $phone_number ?></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about_box contain my-5 my-md-6">
            <div class="inner contain">
                <div class="row">
                    <div class="col-lg-6 position-relative d-flex justify-content-center order-2 order-lg-1">
                        <?= renderImg('about_2_guy.png', 'lib', 'person-img') ?>
                    </div>
                    <div class="col-lg-6 col-xl-5 order-1 order-lg-2">
                        <div class="py-5 pb-md-6 px-4 px-lg-3 px-xl-0">
                            <div class="rounded-pill bg-secondary text-orange px-4 py-3 d-inline-flex lh-1">
                                <div><span class="fw-700">$80 Off</span> Any Roofing Work</div>
                            </div>
                            <div class="heading text-primary fs-54 fw-700 lh-1 pt-3">
                                <span class="text-secondary-dark">Professional plumbing,</span>
                                done right the first time.
                            </div>
                            <div class="lh-2 text-quarternary py-4">
                                Local to Melbourne we can provide customers with reliable and responsive service, as well as a deep understanding of the local plumbing systems and regulations.
                            </div>
                            <div class="row d-md-inline-flex align-items-center bg-white rounded-pill gx-0">
                                <div class="col col-md-auto">
                                    <a href="#form" class="btn rounded-0 text-secondary py-3 px-md-5">
                                        Contact Us
                                    </a>
                                </div>
                                <div class="col-auto">
                                    <a href="tel:<?= $phone_number ?>" class="btn btn-secondary rounded-pill text-white py-3 px-4 px-md-5">
                                        Call Us <span class="ps-2 fw-700"><?= $phone_number ?></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about_box contain d-lg-none">
            <div class="inner contain">
                <div class="row">
                    <div class="col-lg-6 position-relative d-flex justify-content-center order-2 order-lg-1">
                        <?= renderImg('about_1_guys.png', 'lib', 'visibility-none') ?>
                    </div>
                    <div class="col-lg-5 order-1 order-lg-2">
                        <div class="py-5 pb-md-6 px-4 px-lg-0">
                            <div class="rounded-pill bg-secondary text-orange px-4 py-3 d-inline-flex lh-1">
                                <div>CCTV Drain Inspection<span class="fw-700">From $99</span></div>
                            </div>
                            <div class="heading text-primary fs-54 fw-700 lh-1 pt-3">
                                Free roof inspection<br class="d-none d-xl-block" />
                                <span class="text-secondary-dark">with any works to gutter or downpipes.</span>
                            </div>
                            <div class="lh-2 text-quarternary py-4">
                                Local to Melbourne we can provide customers with reliable and responsive service, as well as a deep understanding of the local plumbing systems and regulations.
                            </div>
                            <div class="row d-md-inline-flex align-items-center bg-white rounded-pill gx-0">
                                <div class="col col-md-auto">
                                    <a href="#form" class="btn rounded-0 text-secondary py-3 px-md-5">
                                        Contact Us
                                    </a>
                                </div>
                                <div class="col-auto">
                                    <a href="tel:<?= $phone_number ?>" class="btn btn-secondary rounded-pill text-white py-3 px-4 px-md-5">
                                        Call Us <span class="ps-2 fw-700"><?= $phone_number ?></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about_box d-none d-lg-block">
            <div class="inner py-7 px-4 px-xl-8">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-xl-7">
                        <div class="rounded-pill bg-secondary text-orange px-4 py-3 d-inline-flex lh-1">
                            <div>CCTV Drain Inspection <span class="fw-700">From $99</span></div>
                        </div>
                        <div class="text-primary fs-54 fw-700 lh-1 pt-3">
                            <span class="text-secondary-dark">Free roof inspection</span>
                            with any works to gutter or downpipes.
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5">
                        <div class="row d-inline-flex align-items-center bg-white rounded-pill gx-0">
                            <div class="col-12 col-md-auto">
                                <a href="#form" class="btn rounded-0 text-secondary py-3 px-5">
                                    Contact Us
                                </a>
                            </div>
                            <div class="col-12 col-md-auto">
                                <a href="tel:<?= $phone_number ?>" class="btn btn-secondary rounded-pill text-white py-3 px-md-5">
                                    Call Us <span class="ps-2 fw-700"><?= $phone_number ?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container mt-4 mt-md-7">
    <section class="services">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-xl-10">
                <div class="row justify-content-between align-items-center gy-4 gy-lg-0 px-3">
                    <div class="col-lg-8">
                        <div class="heading fs-54 lh-1 text-primary fw-800">Affordable plumbing <span class="text-white">solutions for every budget.</span></div>
                    </div>
                    <div class="col-12 col-md-auto">
                        <a href="tel:<?= $phone_number ?>" class="btn btn-primary rounded-pill text-white py-3 px-md-5">
                            Call Us <span class="ps-2 fw-700"><?= $phone_number ?></span>
                        </a>
                    </div>
                </div>

                <div class="custom_tab">
                    <div class="px-3 px-lg-0">
                        <div class="tab-navigation rounded-pill my-5">
                            <?php foreach ($services as $i => $service) : ?>
                                <button type="button" for="<?= $service['id'] ?>" class="navi-link<?= $i == 0 ? ' active' : '' ?>">
                                    <?= !empty($service['icon']) ? $service['icon'] : renderImg('service_' . $i . '_nav.png', 'icons') ?>
                                    <?= $service['name'] ?>
                                </button>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="tab-content">
                        <?php foreach ($services as $index => $service) : ?>
                            <div class="custom_tab_content<?= $index == 0 ? ' active' : '' ?>" id="<?= $service['id'] ?>">
                                <div class="row justify-content-between gx-xl-5 gy-md-4">
                                    <div class="col-lg-6">
                                        <div class="px-3 px-lg-0">
                                            <?= renderImg('service_'. $index . '_tab.png', 'icons') ?>
                                            <div class="fs-18 py-3"><?= $service['name'] ?></div>
                                            <div class="heading fs-45 fw-700 lh-1">Your One-Stop Shop for All <?= $service['name'] ?> Services</div>
                                            <div class="py-4 lh-2"><?= $service['description'] ?></div>
                                            <form action="./src/callback" class="callback_form mt-3" method="POST">
                                                <input type="hidden" name="token" id="recaptchaResponse<?= $index ?>" class="recaptchaResponse">
                                                <div class="row align-items-center gx-2">
                                                    <div class="col">
                                                        <input type="tel" name="phoneNumber" placeholder="Your Number" class="form-control" />
                                                    </div>
                                                    <div class="col-auto">
                                                        <button class="btn btn-primary rounded-pill text-white px-4" type="submit">Request Call Back</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="service_cta">
                                            <div class="macbook_action_buttons">
                                                <div class="red"></div>
                                                <div class="yellow"></div>
                                                <div class="green"></div>
                                            </div>
                                            <div class="inner">
                                                <?= renderImg('service_' . $index . '.jpg', 'background') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<section class="testimonials">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-10">
                <div class="heading text-center text-black fs-54 fw-800 lh-1"><span class="text-primary">We prioritise customer satisfaction</span> and strive for the best experience.</div>

                <div class="position-relative">
                    <div class="row testimonial_window mt-6 gy-4 pb-15">
                        <div class="col-lg-4">
                            <div class="row gy-4">
                                <div class="col-12">
                                    <div class="testimonial-card">
                                        <div class="description">I have used All Spec Plumbing & Gas Solutions on a number of occasions and am always pleased with their quality of work, professionalism & honesty. I would highly recommend them.</div>
                                        <div class="row align-items-center gx-3 pt-4">
                                            <div class="col-auto">
                                                <div class="userImage"></div>
                                            </div>
                                            <div class="col">
                                                <div class="text-secondary-dark fs-20 fw-700 lh-1">Natasha Wheller</div>
                                                <div class="text-secondary-dark opacity-0_59">Customer</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="testimonial-card">
                                        <div class="text-primary fw-700 fs-18 pb-3">“Efficient & Professional”</div>
                                        <div class="description">
                                            Nassim is efficient professional on time and did an excellent job every time I have called him for repair. I would definitely recommend him to anyone.
                                        </div>
                                        <div class="row align-items-center gx-3 pt-4">
                                            <div class="col-auto">
                                                <div class="userImage"></div>
                                            </div>
                                            <div class="col">
                                                <div class="text-secondary-dark fs-20 fw-700 lh-1">Jamal Omran</div>
                                                <div class="text-secondary-dark opacity-0_59">Customer</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="testimonial-card">
                                        <div class="text-primary fw-700 fs-18 pb-3">“Excellent Job”</div>
                                        <div class="description">I recently hired All Spec Plumbing & Gas Solutions for some general plumbing work in my home, and I couldn't be happier with the results. The plumber was friendly, professional, and did an excellent job. I would highly recommend this company for any plumbing needs.</div>
                                        <div class="row align-items-center gx-3 pt-4">
                                            <div class="col-auto">
                                                <div class="userImage"></div>
                                            </div>
                                            <div class="col">
                                                <div class="text-secondary-dark fs-20 fw-700 lh-1">William Trent</div>
                                                <div class="text-secondary-dark opacity-0_59">Customer</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row gy-4">
                                <div class="col-12">
                                    <div class="testimonial-card">
                                        <div class="description">I had a plumbing emergency in the middle of the night, and All Spec Plumbing & Gas Solutions was there for me. The 24/7 emergency plumbing service was a lifesaver, and the plumber arrived quickly and resolved the issue with ease. Thank you so much!</div>
                                        <div class="row align-items-center gx-3 pt-4">
                                            <div class="col-auto">
                                                <div class="userImage"></div>
                                            </div>
                                            <div class="col">
                                                <div class="text-secondary-dark fs-20 fw-700 lh-1">Shannon Mohogany</div>
                                                <div class="text-secondary-dark opacity-0_59">Customer</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="testimonial-card">
                                        <div class="text-primary fw-700 fs-18 pb-3">“Efficiency & Professionalism”</div>
                                        <div class="description">
                                            <p class="pb-4">All Spec Plumbing & Gas Solutions fixed a burst pipe in my home, and I was impressed with their efficiency and professionalism.</p>
                                            The plumber quickly identified the problem, explained the repair process, and got the job done in no time. I will definitely be using this company again for any future plumbing needs.
                                        </div>
                                        <div class="row align-items-center gx-3 pt-4">
                                            <div class="col-auto">
                                                <div class="userImage"></div>
                                            </div>
                                            <div class="col">
                                                <div class="text-secondary-dark fs-20 fw-700 lh-1">Pria Shak</div>
                                                <div class="text-secondary-dark opacity-0_59">Customer</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="testimonial-card">
                                        <div class="text-primary fw-700 fs-18 pb-3">“Running Smoothly”</div>
                                        <div class="description">
                                            <p class="pb-4">I had a blocked drain in my home that was causing a lot of problems, but All Spec Plumbing & Gas Solutions came to the rescue.</p>
                                            The plumber was able to clear the blockage quickly and efficiently, and my drains are now running smoothly again. I highly recommend this company for anyone dealing with blocked drains.
                                        </div>
                                        <div class="row align-items-center gx-3 pt-4">
                                            <div class="col-auto">
                                                <div class="userImage"></div>
                                            </div>
                                            <div class="col">
                                                <div class="text-secondary-dark fs-20 fw-700 lh-1">Josephine Wong</div>
                                                <div class="text-secondary-dark opacity-0_59">Customer</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row gy-4">
                                <div class="col-12">
                                    <div class="testimonial-card">
                                        <div class="description">
                                            <p class="pb-4">All Spec Plumbing & Gas Solutions conducted a thorough drain inspection on my property and provided me with a detailed report of their findings.</p>
                                            The plumber was professional, knowledgeable, and answered all of my questions. I feel confident knowing that my drains are in good condition thanks to their expertise.
                                        </div>
                                        <div class="row align-items-center gx-3 pt-4">
                                            <div class="col-auto">
                                                <div class="userImage"></div>
                                            </div>
                                            <div class="col">
                                                <div class="text-secondary-dark fs-20 fw-700 lh-1">Damien Cook</div>
                                                <div class="text-secondary-dark opacity-0_59">Customer</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="testimonial-card">
                                        <div class="text-primary fw-700 fs-18 pb-3">“Highly Recomment”</div>
                                        <div class="description">
                                            <p class="pb-4">I needed a gas safety check for my home, and All Spec Plumbing & Gas Solutions provided an excellent service.</p>
                                            The plumber was thorough and ensured that my gas appliances were safe to use. I highly recommend this company for anyone needing gas-related services.
                                        </div>
                                        <div class="row align-items-center gx-3 pt-4">
                                            <div class="col-auto">
                                                <div class="userImage"></div>
                                            </div>
                                            <div class="col">
                                                <div class="text-secondary-dark fs-20 fw-700 lh-1">Joshua David</div>
                                                <div class="text-secondary-dark opacity-0_59">Customer</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="testimonial-card">
                                        <div class="text-primary fw-700 fs-18 pb-3">“Friendly & Professional”</div>
                                        <div class="description">
                                            <p class="pb-4">All Spec Plumbing & Gas Solutions fixed a leaking toilet in my home, and I couldn't be happier with the results.</p>
                                            The plumber was friendly, professional, and completed the job quickly and efficiently. I would definitely use this company again for any future plumbing needs.
                                        </div>
                                        <div class="row align-items-center gx-3 pt-4">
                                            <div class="col-auto">
                                                <div class="userImage"></div>
                                            </div>
                                            <div class="col">
                                                <div class="text-secondary-dark fs-20 fw-700 lh-1">Leon Mangarelli</div>
                                                <div class="text-secondary-dark opacity-0_59">Customer</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fog"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="integrity">
    <div class="container">
        <div class="heading text-center text-black fs-54 fw-800 lh-1"><span class="text-primary">Integrity in every job</span>, big or small.</div>
        <div class="text-dark text-center fs-18 pt-4 lh-2">All Spec Plumbing provides upfront and transparent pricing and will always provide customers with clarity and transparency each and every time!</div>

        <div class="position-relative">
            <div class="row justify-content-around align-items-center gx-xl-6 pt-4 pt-md-7 position-relative gy-5 gy-lg-0">
                <div class="col-lg-6">
                    <?= renderImg('integrity.jpg', 'lib', 'w-100 rounded-30') ?>
                </div>
                <div class="col-lg-6 px-xl-5">
                    <div class="text-dark-grey fs-54 fw-800 lh-1"><span class="text-primary">Dedicated to<br class="d-none d-xl-block" /> providing</span> the best possible experience</div>
                    <div class="custom_tab my-5 px-3 px-md-0">
                        <div class="tab-navigation rounded-pill mb-5" id="newTabNavigation">
                            <button type="button" for="integrity_eco_friendliness" class="navi-link active">
                                <svg width="21" height="19" viewBox="0 0 21 19" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.82382 12.0324V18.1607C11.2465 18.1607 12.6552 17.8663 13.9696 17.2944C15.2839 16.7224 16.4782 15.8841 17.4841 14.8273C18.4901 13.7704 19.2881 12.5158 19.8325 11.135C20.3769 9.75416 20.6572 8.27422 20.6572 6.77963V0.651367C17.784 0.651367 15.0285 1.85044 12.9968 3.9848C10.9652 6.11917 9.82382 9.01399 9.82382 12.0324Z" />
                                    <path d="M0.657166 6.77979V10.2817C0.657166 12.3713 1.44734 14.3755 2.85386 15.8531C4.26039 17.3307 6.16804 18.1609 8.15717 18.1609V14.659C8.15717 12.5693 7.36699 10.5652 5.96047 9.08755C4.55394 7.60991 2.64629 6.77979 0.657166 6.77979Z" />
                                </svg>
                                Eco Friendliness
                            </button>
                            <button type="button" for="integrity_solar" class="navi-link">
                                <svg width="21" height="22" viewBox="0 0 21 22" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.0374 4.19141C10.2584 4.19141 10.4703 4.09922 10.6266 3.93512C10.7829 3.77103 10.8707 3.54847 10.8707 3.31641V1.56641C10.8707 1.33434 10.7829 1.11178 10.6266 0.947688C10.4703 0.783593 10.2584 0.691406 10.0374 0.691406C9.81636 0.691406 9.6044 0.783593 9.44812 0.947688C9.29184 1.11178 9.20404 1.33434 9.20404 1.56641V3.31641C9.20404 3.54847 9.29184 3.77103 9.44812 3.93512C9.6044 4.09922 9.81636 4.19141 10.0374 4.19141Z" />
                                    <path d="M15.3407 6.49788C15.4503 6.49786 15.5588 6.47512 15.6601 6.43098C15.7613 6.38683 15.8533 6.32215 15.9307 6.24063L17.109 5.00338C17.2608 4.83835 17.3448 4.61733 17.3429 4.3879C17.341 4.15848 17.2534 3.93902 17.0988 3.77679C16.9443 3.61456 16.7353 3.52253 16.5168 3.52054C16.2983 3.51855 16.0878 3.60674 15.9307 3.76613L14.7523 5.00338C14.6356 5.12565 14.556 5.28154 14.5237 5.45132C14.4914 5.62109 14.5077 5.79713 14.5707 5.95713C14.6337 6.11714 14.7405 6.25393 14.8775 6.35019C15.0146 6.44644 15.1758 6.49784 15.3407 6.49788Z" />
                                    <path d="M19.204 10.3164H17.5374C17.3164 10.3164 17.1044 10.4086 16.9481 10.5727C16.7918 10.7368 16.704 10.9593 16.704 11.1914C16.704 11.4235 16.7918 11.646 16.9481 11.8101C17.1044 11.9742 17.3164 12.0664 17.5374 12.0664H19.204C19.4251 12.0664 19.637 11.9742 19.7933 11.8101C19.9496 11.646 20.0374 11.4235 20.0374 11.1914C20.0374 10.9593 19.9496 10.7368 19.7933 10.5727C19.637 10.4086 19.4251 10.3164 19.204 10.3164Z" />
                                    <path d="M15.9307 16.1421C15.7735 15.9827 15.563 15.8945 15.3445 15.8965C15.126 15.8985 14.917 15.9905 14.7625 16.1528C14.608 16.315 14.5204 16.5345 14.5185 16.7639C14.5166 16.9933 14.6006 17.2143 14.7524 17.3794L15.9307 18.6166C16.0879 18.776 16.2984 18.8642 16.5169 18.8622C16.7354 18.8602 16.9444 18.7682 17.0989 18.6059C17.2534 18.4437 17.341 18.2243 17.3429 17.9948C17.3448 17.7654 17.2608 17.5444 17.109 17.3794L15.9307 16.1421Z" />
                                    <path d="M10.0374 18.1914C9.81636 18.1914 9.6044 18.2836 9.44812 18.4477C9.29184 18.6118 9.20404 18.8343 9.20404 19.0664V20.8164C9.20404 21.0485 9.29184 21.271 9.44812 21.4351C9.6044 21.5992 9.81636 21.6914 10.0374 21.6914C10.2584 21.6914 10.4703 21.5992 10.6266 21.4351C10.7829 21.271 10.8707 21.0485 10.8707 20.8164V19.0664C10.8707 18.8343 10.7829 18.6118 10.6266 18.4477C10.4703 18.2836 10.2584 18.1914 10.0374 18.1914Z" />
                                    <path d="M4.14401 16.1421L2.96568 17.3794C2.81388 17.5444 2.72988 17.7654 2.73178 17.9948C2.73368 18.2243 2.82132 18.4437 2.97583 18.6059C3.13033 18.7682 3.33935 18.8602 3.55784 18.8622C3.77634 18.8642 3.98684 18.776 4.14401 18.6166L5.32234 17.3794C5.47414 17.2143 5.55814 16.9933 5.55624 16.7639C5.55434 16.5345 5.4667 16.315 5.31219 16.1528C5.15769 15.9905 4.94868 15.8985 4.73018 15.8965C4.51168 15.8945 4.30118 15.9827 4.14401 16.1421Z" />
                                    <path d="M3.37069 11.1914C3.37069 10.9593 3.28289 10.7368 3.12661 10.5727C2.97033 10.4086 2.75837 10.3164 2.53735 10.3164H0.870687C0.649673 10.3164 0.437712 10.4086 0.281431 10.5727C0.125151 10.7368 0.0373535 10.9593 0.0373535 11.1914C0.0373535 11.4235 0.125151 11.646 0.281431 11.8101C0.437712 11.9742 0.649673 12.0664 0.870687 12.0664H2.53735C2.75837 12.0664 2.97033 11.9742 3.12661 11.8101C3.28289 11.646 3.37069 11.4235 3.37069 11.1914Z" />
                                    <path d="M4.14401 6.24063C4.30118 6.40002 4.51168 6.48821 4.73018 6.48622C4.94868 6.48423 5.15769 6.3922 5.31219 6.22997C5.4667 6.06774 5.55434 5.84828 5.55624 5.61886C5.55814 5.38943 5.47414 5.16841 5.32234 5.00338L4.14401 3.76613C3.98684 3.60674 3.77634 3.51855 3.55784 3.52054C3.33935 3.52253 3.13033 3.61456 2.97583 3.77679C2.82132 3.93902 2.73368 4.15848 2.73178 4.3879C2.72988 4.61733 2.81388 4.83835 2.96568 5.00338L4.14401 6.24063Z" />
                                    <path d="M10.0374 16.4414C12.7988 16.4414 15.0374 14.0909 15.0374 11.1914C15.0374 8.29191 12.7988 5.94141 10.0374 5.94141C7.27593 5.94141 5.03735 8.29191 5.03735 11.1914C5.03735 14.0909 7.27593 16.4414 10.0374 16.4414Z" />
                                </svg>

                                Solar
                            </button>
                            <button type="button" for="integrity_equipment" class="navi-link">
                                <svg width="16" height="17" viewBox="0 0 16 17" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.1226 12.91L10.6133 8.7168L8.24927 11.6519L12.1072 16.1013C12.1314 16.1294 12.155 16.1575 12.1816 16.1857C12.5819 16.6094 13.1247 16.8474 13.6907 16.8474C14.2567 16.8474 14.7996 16.6094 15.1999 16.1857C15.2264 16.1575 15.2501 16.1294 15.2743 16.1013C15.6538 15.6568 15.8511 15.0709 15.8226 14.4724C15.7942 13.8739 15.5424 13.3119 15.1226 12.91Z" />
                                    <path d="M2.35689 5.23394C2.40669 5.28669 2.47424 5.31633 2.54468 5.31635H3.7631L6.13514 7.82819L7.40057 6.68519L4.93531 4.07491V2.7851C4.93529 2.71051 4.9073 2.63898 4.85748 2.58625L2.9981 0.617502C2.94829 0.564776 2.88074 0.535156 2.81031 0.535156C2.73987 0.535156 2.67232 0.564776 2.62251 0.617502L0.49751 2.8675C0.447713 2.92024 0.419739 2.99177 0.419739 3.06635C0.419739 3.14092 0.447713 3.21245 0.49751 3.26519L2.35689 5.23394Z" />
                                    <path d="M15.6906 3.30071L13.8368 5.26383L11.3606 2.6423L13.2147 0.679175C12.5531 0.480759 11.8514 0.48892 11.194 0.702676C10.5366 0.916433 9.95154 1.32669 9.50911 1.88411C9.06668 2.44154 8.78573 3.12241 8.70004 3.84486C8.61435 4.56731 8.72756 5.3006 9.02607 5.95655L0.80843 13.3785C0.58608 13.5783 0.447776 13.8635 0.423917 14.1713C0.400058 14.479 0.492598 14.7843 0.681195 15.0198C0.700586 15.044 0.721039 15.0676 0.742289 15.0901L2.07945 16.5057C2.18161 16.6139 2.3029 16.6997 2.4364 16.7582C2.56989 16.8168 2.71297 16.8469 2.85746 16.8469C3.00195 16.8469 3.14503 16.8168 3.27852 16.7582C3.41202 16.6997 3.53331 16.6139 3.63548 16.5057C3.65699 16.4832 3.67718 16.4598 3.69684 16.4356L10.7064 7.73546C11.3259 8.05201 12.0185 8.17227 12.7011 8.08176C13.3836 7.99125 14.0268 7.69382 14.5534 7.22527C15.08 6.75673 15.4675 6.13703 15.6693 5.44076C15.871 4.7445 15.8784 4.00133 15.6906 3.30071Z" />
                                </svg>
                                Equipment & Technology
                            </button>
                            <button type="button" for="integrity_grey_water" class="navi-link">
                                <svg width="16" height="17" viewBox="0 0 16 17" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.1226 12.91L10.6133 8.7168L8.24927 11.6519L12.1072 16.1013C12.1314 16.1294 12.155 16.1575 12.1816 16.1857C12.5819 16.6094 13.1247 16.8474 13.6907 16.8474C14.2567 16.8474 14.7996 16.6094 15.1999 16.1857C15.2264 16.1575 15.2501 16.1294 15.2743 16.1013C15.6538 15.6568 15.8511 15.0709 15.8226 14.4724C15.7942 13.8739 15.5424 13.3119 15.1226 12.91Z" />
                                    <path d="M2.35689 5.23394C2.40669 5.28669 2.47424 5.31633 2.54468 5.31635H3.7631L6.13514 7.82819L7.40057 6.68519L4.93531 4.07491V2.7851C4.93529 2.71051 4.9073 2.63898 4.85748 2.58625L2.9981 0.617502C2.94829 0.564776 2.88074 0.535156 2.81031 0.535156C2.73987 0.535156 2.67232 0.564776 2.62251 0.617502L0.49751 2.8675C0.447713 2.92024 0.419739 2.99177 0.419739 3.06635C0.419739 3.14092 0.447713 3.21245 0.49751 3.26519L2.35689 5.23394Z" />
                                    <path d="M15.6906 3.30071L13.8368 5.26383L11.3606 2.6423L13.2147 0.679175C12.5531 0.480759 11.8514 0.48892 11.194 0.702676C10.5366 0.916433 9.95154 1.32669 9.50911 1.88411C9.06668 2.44154 8.78573 3.12241 8.70004 3.84486C8.61435 4.56731 8.72756 5.3006 9.02607 5.95655L0.80843 13.3785C0.58608 13.5783 0.447776 13.8635 0.423917 14.1713C0.400058 14.479 0.492598 14.7843 0.681195 15.0198C0.700586 15.044 0.721039 15.0676 0.742289 15.0901L2.07945 16.5057C2.18161 16.6139 2.3029 16.6997 2.4364 16.7582C2.56989 16.8168 2.71297 16.8469 2.85746 16.8469C3.00195 16.8469 3.14503 16.8168 3.27852 16.7582C3.41202 16.6997 3.53331 16.6139 3.63548 16.5057C3.65699 16.4832 3.67718 16.4598 3.69684 16.4356L10.7064 7.73546C11.3259 8.05201 12.0185 8.17227 12.7011 8.08176C13.3836 7.99125 14.0268 7.69382 14.5534 7.22527C15.08 6.75673 15.4675 6.13703 15.6693 5.44076C15.871 4.7445 15.8784 4.00133 15.6906 3.30071Z" />
                                </svg>
                                Recycling Grey Water
                            </button>
                            <button type="button" for="integrity_rainwater" class="navi-link">
                                <svg width="16" height="17" viewBox="0 0 16 17" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.1226 12.91L10.6133 8.7168L8.24927 11.6519L12.1072 16.1013C12.1314 16.1294 12.155 16.1575 12.1816 16.1857C12.5819 16.6094 13.1247 16.8474 13.6907 16.8474C14.2567 16.8474 14.7996 16.6094 15.1999 16.1857C15.2264 16.1575 15.2501 16.1294 15.2743 16.1013C15.6538 15.6568 15.8511 15.0709 15.8226 14.4724C15.7942 13.8739 15.5424 13.3119 15.1226 12.91Z" />
                                    <path d="M2.35689 5.23394C2.40669 5.28669 2.47424 5.31633 2.54468 5.31635H3.7631L6.13514 7.82819L7.40057 6.68519L4.93531 4.07491V2.7851C4.93529 2.71051 4.9073 2.63898 4.85748 2.58625L2.9981 0.617502C2.94829 0.564776 2.88074 0.535156 2.81031 0.535156C2.73987 0.535156 2.67232 0.564776 2.62251 0.617502L0.49751 2.8675C0.447713 2.92024 0.419739 2.99177 0.419739 3.06635C0.419739 3.14092 0.447713 3.21245 0.49751 3.26519L2.35689 5.23394Z" />
                                    <path d="M15.6906 3.30071L13.8368 5.26383L11.3606 2.6423L13.2147 0.679175C12.5531 0.480759 11.8514 0.48892 11.194 0.702676C10.5366 0.916433 9.95154 1.32669 9.50911 1.88411C9.06668 2.44154 8.78573 3.12241 8.70004 3.84486C8.61435 4.56731 8.72756 5.3006 9.02607 5.95655L0.80843 13.3785C0.58608 13.5783 0.447776 13.8635 0.423917 14.1713C0.400058 14.479 0.492598 14.7843 0.681195 15.0198C0.700586 15.044 0.721039 15.0676 0.742289 15.0901L2.07945 16.5057C2.18161 16.6139 2.3029 16.6997 2.4364 16.7582C2.56989 16.8168 2.71297 16.8469 2.85746 16.8469C3.00195 16.8469 3.14503 16.8168 3.27852 16.7582C3.41202 16.6997 3.53331 16.6139 3.63548 16.5057C3.65699 16.4832 3.67718 16.4598 3.69684 16.4356L10.7064 7.73546C11.3259 8.05201 12.0185 8.17227 12.7011 8.08176C13.3836 7.99125 14.0268 7.69382 14.5534 7.22527C15.08 6.75673 15.4675 6.13703 15.6693 5.44076C15.871 4.7445 15.8784 4.00133 15.6906 3.30071Z" />
                                </svg>
                                Rainwater Harvesting
                            </button>
                            <button type="button" for="integrity_biodegradable" class="navi-link">
                                <svg width="16" height="17" viewBox="0 0 16 17" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.1226 12.91L10.6133 8.7168L8.24927 11.6519L12.1072 16.1013C12.1314 16.1294 12.155 16.1575 12.1816 16.1857C12.5819 16.6094 13.1247 16.8474 13.6907 16.8474C14.2567 16.8474 14.7996 16.6094 15.1999 16.1857C15.2264 16.1575 15.2501 16.1294 15.2743 16.1013C15.6538 15.6568 15.8511 15.0709 15.8226 14.4724C15.7942 13.8739 15.5424 13.3119 15.1226 12.91Z" />
                                    <path d="M2.35689 5.23394C2.40669 5.28669 2.47424 5.31633 2.54468 5.31635H3.7631L6.13514 7.82819L7.40057 6.68519L4.93531 4.07491V2.7851C4.93529 2.71051 4.9073 2.63898 4.85748 2.58625L2.9981 0.617502C2.94829 0.564776 2.88074 0.535156 2.81031 0.535156C2.73987 0.535156 2.67232 0.564776 2.62251 0.617502L0.49751 2.8675C0.447713 2.92024 0.419739 2.99177 0.419739 3.06635C0.419739 3.14092 0.447713 3.21245 0.49751 3.26519L2.35689 5.23394Z" />
                                    <path d="M15.6906 3.30071L13.8368 5.26383L11.3606 2.6423L13.2147 0.679175C12.5531 0.480759 11.8514 0.48892 11.194 0.702676C10.5366 0.916433 9.95154 1.32669 9.50911 1.88411C9.06668 2.44154 8.78573 3.12241 8.70004 3.84486C8.61435 4.56731 8.72756 5.3006 9.02607 5.95655L0.80843 13.3785C0.58608 13.5783 0.447776 13.8635 0.423917 14.1713C0.400058 14.479 0.492598 14.7843 0.681195 15.0198C0.700586 15.044 0.721039 15.0676 0.742289 15.0901L2.07945 16.5057C2.18161 16.6139 2.3029 16.6997 2.4364 16.7582C2.56989 16.8168 2.71297 16.8469 2.85746 16.8469C3.00195 16.8469 3.14503 16.8168 3.27852 16.7582C3.41202 16.6997 3.53331 16.6139 3.63548 16.5057C3.65699 16.4832 3.67718 16.4598 3.69684 16.4356L10.7064 7.73546C11.3259 8.05201 12.0185 8.17227 12.7011 8.08176C13.3836 7.99125 14.0268 7.69382 14.5534 7.22527C15.08 6.75673 15.4675 6.13703 15.6693 5.44076C15.871 4.7445 15.8784 4.00133 15.6906 3.30071Z" />
                                </svg>
                                Bio-degradable Plumbing Products
                            </button>
                        </div>
                        <div class="tab-content">
                            <div class="custom_tab_content active" id="integrity_eco_friendliness">
                                Eco-friendly solutions can provide customers with the opportunity to reduce their environmental impact while saving money on their utility bills.
                            </div>
                            <div class="custom_tab_content" id="integrity_solar">
                                The team at All Spec can also assist our clients with Solar Solutions for Hot water and other services that you may require.
                            </div>
                            <div class="custom_tab_content" id="integrity_equipment">
                                By investing in high quality equipment and technology, our plumbing company is able to provide efficient and effective solutions for all of your plumbing needs.
                            </div>
                            <div class="custom_tab_content" id="integrity_grey_water">
                                At All Spec Plumbing, we offer professional grey water recycling services to help homeowners and businesses in Melbourne reuse water for irrigation, toilets, and other non-potable needs, reducing water usage and lowering water bills.
                            </div>
                            <div class="custom_tab_content" id="integrity_rainwater">
                                All Spec Plumbing provides expert rainwater harvesting solutions for residential and commercial properties in Melbourne, allowing you to collect and store rainwater for irrigation, landscaping, and other non-potable water needs, helping to conserve water and save on utility costs.
                            </div>
                            <div class="custom_tab_content" id="integrity_biodegradable">
                                At All Spec Plumbing, we use high-quality and eco-friendly biodegradable plumbing products to minimize our environmental impact while providing effective and safe solutions for our customers in Melbourne.
                            </div>
                        </div>
                    </div>
                    <div class="row d-md-inline-flex align-items-center bg-primary rounded-pill gx-0">
                        <div class="col col-md-auto">
                            <a href="#form" class="btn rounded-0 text-white py-3 px-md-5">
                                Contact Us
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="tel:<?= $phone_number ?>" class="btn btn-secondary rounded-pill text-white py-3 px-5">
                                Call Us <span class="ps-2 fw-700"><?= $phone_number ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <?= renderImg('integrity_layer.png', 'background', 'integrity_layer') ?>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row justify-content-center justify-content-lg-between align-items-center gy-4 gy-lg-0">
            <div class="col-md-auto d-flex gap-2 gap-md-4 gap-xxl-5 text-center ">
                <span>Copyright <?= date('Y') ?></span>
                <span class="text-primary">|</span>
                <span><?= $site ?></span>
                <span class="text-primary">|</span>
                <span>All Rights Reserved</span>
            </div>
            <div class="col-md-auto">
                <div class="row align-items-center gx-xl-5 gy-4 gy-lg-0">
                    <div class="col-lg-auto d-flex gap-4 gap-xxl-5 justify-content-center">
                        <span><u>Terms & Conditions</u></span>
                        <span class="text-primary">|</span>
                        <span><u>Privacy Policies</u></span>
                    </div>
                    <div class="col-lg-auto text-center">
                        <a href="https://www.aiims.com.au/like-our-work/" target="_blank">
                            <?= renderImg("aiims.png", "logo") ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>