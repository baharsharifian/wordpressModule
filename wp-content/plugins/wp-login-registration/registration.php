<?php /* Template Name: عضویت */ ?>
<?php if(is_user_logged_in()){
    wp_redirect(site_url());
}?>
<?php get_header(); ?>
<?php get_template_part('partials/nav/nav','nav');?>
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
                                                <p>زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
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
                                                <p>زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
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
                                                <p>زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
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
                                                <p>زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
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
                                                <p>زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
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
                                <a href="index.html" class="log-logo_head"><img src="<?php echo LR_PLUGIN_URL.'assets/img/logo.png' ?>" class="img-fluid" width="80" alt="" /></a>
                                <div class="log__heads">
                                    <h4 class="mt-0 logs_title">ایجاد یک <span class="theme-cl">حساب کاربری</span></h4>
                                </div>
                                <div id="get_user_phone">
                                <div class="form-group" id="user_phone_number">
                                    <label for="user_phone">شماره موبایل*</label>
                                    <input type="text" class="form-control user_phone" value="">
                                </div>
                                <div class="form-group" id="verification_code">
                                    <label for="verification_code"> کد تاییده*</label>
                                    <input type="text" class="form-control verification_code">
                                </div>
                                <div class="form-group">
                                    <a href="" class="btn btn_apply w-100 " id="send_code">ارسال کد تاییده</a>
                                </div>
                                </div>
                                <div class="form-group text-center">
                                    <span>یا ثبت نام با</span>
                                </div>
                                
                                <div class="social_logs">
                                    <ul>
                                        <li class="fb-login"><a href="#"><img src="<?php echo LR_PLUGIN_URL.'assets/img/google.svg' ?>" class="img-fluid mr-2" width="15" alt="" />Google</a></li>
                                        <li class="gp-login"><a href="#"><img src="<?php echo LR_PLUGIN_URL.'assets/img/facebook.svg' ?>" class="img-fluid mr-2" width="15" alt="" />Facebook</a></li>
                                    </ul>
                                </div>
                                
                                <div class="form-group text-center mb-0 mt-3">
                                    آیا حساب کاربری دارید؟ <a class="theme-cl" >ورود</a>
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
