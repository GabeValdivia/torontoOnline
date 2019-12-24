            </div><!-- .container -->
        </div><!-- #page -->
        <footer class="site-footer">
            <nav id="site-navigation" class="main-navigation" role="navigation">
                <?php 
                    wp_nav_menu(array(
                        'theme_location' => 'main_menu'
                    ));
                
                ?>
            </nav><!-- nav -->
            <hr>
            <div class="copyright">
                <p>torontoOnline <?php echo date('Y'); ?></p>
            </div>
        </footer>
    </body>
</html>