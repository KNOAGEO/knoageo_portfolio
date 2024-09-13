<!-- フッター２（簡略版 -->

<?php ?>

    <footer class="footer">
        <hr class="light-mainbar" />
        <div class="footerzone">
        <a href="#" class="footerlogo">
          <img src="<?php echo get_template_directory_uri(); ?>/image/KNOAGEOロゴ1.png" alt="トップページに戻る"></a><br>
          <div class="copyright">&copy;2025 KNOAGEO</div>
        </div>
      </footer>
      <!-- jQueryをCDNで導入するためのコード -->
      <script src="<?php echo get_template_directory_uri(); ?>/https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>  
      <script type="<?php echo get_template_directory_uri(); ?>/text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/js/top.js"></script>

      <?php wp_footer(); ?>
      </body>
      </html>