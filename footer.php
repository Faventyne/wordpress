</main>
<!-- ./main -->
<?php if (is_front_page()) : ?>
    <section id="section-testimony">
        <blockquote class="wrapper">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque voluptatum, quibusdam temporibus voluptas repudiandae hic maiores eligendi repellendus, accusamus nobis laboriosam</p>
        </blockquote>
    </section>
<?php endif; ?>
<!-- ./testimony -->

<footer class="main-footer">
    <div class="wrapper">
        <div class="container">

            <?php dynamic_sidebar('footer-sidebar') ?>
            <!-- <div class="col">
                <h4>Get in Touch</h4>
                <ul>
                    <li class="plan">Moonshine Street No: 14/05<br>
                        Light City, Jupiter
                    </li>
                    <li class="tel">
                        0247 541 65 87
                    </li>
                    <li class="message">
                        <a href="mailto:support@longwave.com" title="Ecrire à support@longwave.com">support@longwave.com</a>
                    </li>
                </ul>
            </div>


            <div class="col">
                <h4>Twitter</h4>
                <ul class="twitter-list">
                    <li>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam autem assumend
                    </li>
                    <li>
                        Vitae ullam ipsam rem ratione sit facere ut. Natus voluptates fugiat quaerat
                    </li>
                    <li>
                        Sapiente perferendis quis consequatur exercitationem sed facilis.
                    </li>
                </ul>
            </div>


            <div class="col">
                <h4>Popular posts</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam autem assumend
                </p>
                <p>
                    Vitae ullam ipsam rem ratione sit facere ut. Natus voluptates fugiat quaerat
                </p>
                <p>
                    Sapiente perferendis quis consequatur exercitationem sed facilis.
                </p>
            </div>


            <div class="col">
                <h4>About us</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A cupiditate, doloremque recusandae pariatur tempora placeat? Commodi, non
                </p>
                <p>
                    Fugit dolore delectus placeat veritatis autem consequuntur sit consequatur sint dolorum? Voluptates, ipsum.
                </p>
            </div> -->


        </div>
        <!-- ./container -->

        <hr />

        <div class="copyrights container">

            <div class="col">&copy; 2016 Marble. All rights reserved. Theme by elemis.</div>
            <div class="col"><?php wp_nav_menu(array('theme_location' => 'footer_menu')); ?></div>
        </div>


        <!-- ./copyrights -->

    </div>


</footer>
<!-- ./main-footer -->
<?php wp_footer(); ?>
</body>
</html>
