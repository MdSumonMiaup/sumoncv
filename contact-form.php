<form class="contact__form">
				
                                        <!-- form message -->
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                                <?php echo esc_html_e( "Thank You, ", 'sumoncv' ) ?><b id="get-name"></b> <?php echo esc_html_e( "Your message was sent successfully.", 'sumoncv' ) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  message -->

                                        <!-- form element -->
                                            <label for="name">
                                                <input name="name" type="text" id="name" class="" placeholder="Your Name" required>
                                            </label>
                                            <label for="email">
                                                <input name="email" type="email" id="email" class="" placeholder="Email" required>
                                            </label>
                                            <label for="message">
                                                <textarea name="message" id="message" class="" rows="5" placeholder="Message" required></textarea>
                                            </label>	
                                            <button onclick="getname()" class="bt-submit" type="submit"><?php echo esc_html_e( "Submit Quiry", 'sumoncv' ) ?></button>
                                        <!--  form element -->
                                    </form>