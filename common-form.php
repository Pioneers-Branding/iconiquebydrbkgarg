<form id="contact-form" name="contact-form" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="md-form">
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Full name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form">
                                        <input type="tel" id="phone" name="phone" class="form-control" placeholder="Phone" pattern="[6-9]{1}[0-9]{9}"  maxlength="10" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form">
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form">
                                        <input type="text" id="name" name="procedure" class="form-control" placeholder="Procedure">
                                    </div>
                                </div>
                            </div>
                            <!--Grid row-->
                            <div class="row">
                                <!--Grid column-->
                                <div class="col-md-12">
                                    <div class="md-form">
                                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="Your Query.."></textarea>
                                    </div>
                                </div>
                            </div>
                            <!--Grid row-->
                            <!-- <input type="submit" id="submit" name="submit" class="btn_submit" placeholder="Submit"> -->
                            <button class="btn_submit" name="submit" type="submit">Submit</button>
                        </form>
                        
                        
                         <script>
            const scriptURL = 'https://script.google.com/macros/s/AKfycbw_IPyscWg_LyQ8YrMZdkO2LGXJNm_L-qos29Qiuub1SSDSY8RdSCvHYfekyM6pJPQh/exec'
            const form = document.forms['contact-form']
          
            form.addEventListener('submit', e => {
              e.preventDefault()
              fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                .then(response => alert("Thanks for Contacting us..! We Will Contact You Soon..."))
                .catch(error => console.error('Error!', error.message))
            })
          </script>
