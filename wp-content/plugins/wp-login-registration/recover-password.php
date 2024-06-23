<?php /* Template Name: بازیابی کلمه عبور */ ?>
<?php if(is_user_logged_in()){
    wp_redirect(site_url());
}?>
<?php get_header(); ?>
<?php get_template_part('partials/nav/nav', 'nav'); ?>
<div id="main-wrapper">
    <!-- ========================== SignUp Elements ============================= -->
    <section class="log-space">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11 col-md-11">
                    <div class="row no-gutters position-relative log_rads">
                        <div class="col-lg-6 col-md-5 bg-cover">
                            <div class="lui_9okt6">
                                <div class="_loh_revu97">
                                    <div id="reviews-login" dir="rtl">

                                        <!-- Single Reviews -->
                                        <div class="_loh_r96">
                                            <div class="_bloi_quote"><i class="fa fa-quote-right"></i></div>
                                            <div class="_loh_r92">
                                                <h4>خدمات خوب</h4>
                                            </div>
                                            <div class="_loh_r93">
                                                <p>زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته
                                                    اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                                            </div>
                                            <div class="_loh_foot_r93">
                                                <h4>زهرا مرادی</h4>
                                                <span>مدیر مدرسه</span>
                                            </div>
                                        </div>

                                        <!-- Single Reviews -->
                                        <div class="_loh_r96">
                                            <div class="_bloi_quote"><i class="fa fa-quote-right"></i></div>
                                            <div class="_loh_r92">
                                                <h4>مدرسین باتجربه</h4>
                                            </div>
                                            <div class="_loh_r93">
                                                <p>زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته
                                                    اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                                            </div>
                                            <div class="_loh_foot_r93">
                                                <h4>پارمیدا دادخواه</h4>
                                                <span>گرافیست</span>
                                            </div>
                                        </div>

                                        <!-- Single Reviews -->
                                        <div class="_loh_r96">
                                            <div class="_bloi_quote"><i class="fa fa-quote-right"></i></div>
                                            <div class="_loh_r92">
                                                <h4>پشتیبانی قوی</h4>
                                            </div>
                                            <div class="_loh_r93">
                                                <p>زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته
                                                    اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                                            </div>
                                            <div class="_loh_foot_r93">
                                                <h4>باربد حسنی</h4>
                                                <span>برنامه نویس</span>
                                            </div>
                                        </div>

                                        <!-- Single Reviews -->
                                        <div class="_loh_r96">
                                            <div class="_bloi_quote"><i class="fa fa-quote-right"></i></div>
                                            <div class="_loh_r92">
                                                <h4>فن بیان بالا</h4>
                                            </div>
                                            <div class="_loh_r93">
                                                <p>زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته
                                                    اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                                            </div>
                                            <div class="_loh_foot_r93">
                                                <h4>زهرا مرادی</h4>
                                                <span>مدیر مدرسه</span>
                                            </div>
                                        </div>
                                        <!-- Single Reviews -->
                                        <div class="_loh_r96">
                                            <div class="_bloi_quote"><i class="fa fa-quote-right"></i></div>
                                            <div class="_loh_r92">
                                                <h4>مسلط و منظم</h4>
                                            </div>
                                            <div class="_loh_r93">
                                                <p>زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته
                                                    اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                                            </div>
                                            <div class="_loh_foot_r93">
                                                <h4>سوگند کاشانی</h4>
                                                <span>شاگرد</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-7 position-static p-4">
                            <div class="log_wraps">
                                <a href="index.html" class="log-logo_head"><img
                                            src="<?php echo LR_PLUGIN_URL . 'assets/img/logo.png' ?>" class="img-fluid"
                                            width="80" alt=""/></a>
                                <div class="log__heads">
                                    <h4 class="mt-0 logs_title">ایجاد یک <span class="theme-cl">بازیابی کلمه عبور</span>
                                    </h4>
                                </div>
                                <div id="get_user_phone">
                                    <?php
                                    $token = '';
                                    $token = find_recover_token($_GET['recoverToken']);
                                    if (isset($_GET['recoverToken']) && !empty($_GET['recoverToken'])):?>
                                        <?php if ($token): ?>
                                            <div class="form-group" id="user_phone_number">
                                                <label for="user_phone">کلمه عبور*</label>
                                                <input type="text" dir="ltr" class="form-control new_password" value=""
                                                       placeholder="New Password...">
                                            </div>
                                            <div class="form-group" id="user_phone_number">
                                                <label for="user_phone">تکرار کلمه عبور*</label>
                                                <input type="text" dir="ltr" class="form-control repeat_new_password"
                                                       value="" placeholder="Repeat New Password...">
                                            </div>
                                            <input type="hidden" class="recover_token" value="<?php echo $_GET['recoverToken'] ?>">
                                            <div class="form-group">
                                                <a href="" class="btn btn_apply w-100 " id="change_password">تغیر کلمه
                                                    عبور</a>
                                            </div>
                                        <?php else: ?>
                                            <div class="alert alert-danger">لینک بازیابی کلمه عبور شما نامعتبر می
                                                باشد!
                                            </div>
                                        
                                        <?php endif; ?>
                                    
                                    <?php else: ?>
                                        <div class="form-group" id="user_phone_number">
                                            <label for="user_phone">ایمیل*</label>
                                            <input type="email" dir="ltr" class="form-control recover_email"
                                                   value="va.salehi@gmail.com" placeholder="Email...">
                                        </div>
                                        <div class="form-group">
                                            <a href="" class="btn btn_apply w-100 " id="send_recovery_mail">ارسال لینک
                                                تغییر کلمه عبور</a>
                                        </div>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================== Login Elements ============================= -->


</div>
<?php get_footer(); ?>

