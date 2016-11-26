<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<footer id="footer" class="footer">
      <div class="footer-inner"> 
<div class="copyright" >
  &copy;
  <span itemprop="copyrightYear"><?php echo date('Y'); ?></span>
  <span class="with-love">
    <i class="icon-next-heart fa fa-heart"></i>
  </span>
  <span class="author" itemprop="copyrightHolder"><a href="<?php $this->options->siteUrl(); ?>"><?php if($this->options->next_name) $this->options->next_name(); else $this->options->title(); ?></a></span>

<?php if ( function_exists('timer_stop') ) { ?>
<span> | <?php $tmp=timer_stop(1);echo 1000*$tmp; ?> ms</span>
<?php } ?>

</div>

<div class="powered-by">
  <?php _e('由 <a class="theme-link" href="http://www.typecho.org">Typecho</a> 强力驱动'); ?>
</div>

<div class="theme-info">
  主题 -
  <a class="theme-link" href="https://github.com/zgq354/typecho-theme-next">
    NexT.Mist
  </a>
</div>

       </div>
</footer>
<div class="back-to-top"></div>
</div>
<script type="text/javascript" src="<?php $this->options->themeUrl('/vendors/jquery/index.js?v=2.1.3');?>"></script>
<script type="text/javascript" src="<?php $this->options->themeUrl('/vendors/fancybox/source/jquery.fancybox.pack.js');?>"></script>
<script type="text/javascript" src="<?php $this->options->themeUrl('/js/fancy-box.js?v=0.4.5.2');?>"></script>


<script type="text/javascript" src="<?php $this->options->themeUrl('/js/helpers.js?v=0.4.5.2');?>"></script>

<script type="text/javascript" src="<?php $this->options->themeUrl('/vendors/velocity/velocity.min.js');?>"></script>
<script type="text/javascript" src="<?php $this->options->themeUrl('/vendors/velocity/velocity.ui.min.js');?>"></script>

<script type="text/javascript" src="<?php $this->options->themeUrl('/js/motion.js?v=0.4.5.2');?>" id="motion.global"></script>

<script type="text/javascript" src="<?php $this->options->themeUrl('/vendors/fastclick/lib/fastclick.min.js?v=1.0.6');?>"></script>

<?php if ($this->is('post')): ?>
<script type="text/javascript" src="<?php $this->options->themeUrl('/js/bootstrap.scrollspy.js?v=0.4.5.2');?>"></script>
<script type="text/javascript" src="<?php $this->options->themeUrl('/js/post_sidebar.js?v=0.4.5.2');?>"></script>
<?php endif; ?>

 <?php if ($this->is('page','archive')||$this->is('archive')): ?>
    <script type="text/javascript" id="motion.page.archive">
      $('.archive-year').velocity('transition.slideLeftIn');
    </script>
  <?php endif;?>

<script type="text/javascript" src="<?php $this->options->themeUrl('/js/lazyload.js');?>"></script>
<script type="text/javascript">
$(function () {
	$("#posts").find('img').lazyload({
		placeholder: "<?php $this->options->themeUrl('/images/loading.gif');?>",
		effect: "fadeIn"
	});
});
</script>
<script type="text/javascript" src="<?php $this->options->themeUrl('/js/bootstrap.js?v=0.4.5.2');?>"></script>
<?php $this->footer(); ?>
<script>(function(T,h,i,n,k,P,a,g,e){g=function(){P=h.createElement(i);a=h.getElementsByTagName(i)[0];P.src=k;P.charset="utf-8";P.async=1;a.parentNode.insertBefore(P,a)};T["ThinkPageWeatherWidgetObject"]=n;T[n]||(T[n]=function(){(T[n].q=T[n].q||[]).push(arguments)});T[n].l=+new Date();if(T.attachEvent){T.attachEvent("onload",g)}else{T.addEventListener("load",g,false)}}(window,document,"script","tpwidget","//widget.thinkpage.cn/widget/chameleon.js"))</script>
<script>tpwidget("init", {
    "flavor": "bubble",
    "location": "WSVZ695PCF71",
    "geolocation": "disabled",
    "position": "top-left",
    "margin": "10px 10px",
    "language": "zh-chs",
    "unit": "c",
    "theme": "chameleon",
    "uid": "UC1E34A864",
    "hash": "98e8c7ae82edd3dbc6c3ac6918bb974d"
});
tpwidget("show");</script>
</body>
</html>
