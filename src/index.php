<?php include('includes/header.php'); ?>

    <main class="main-content">
      <section class="section-typography section-demo">
        <div class="container">
          <div class="row">

            <h2 class="title">Typography</h2>

            <h4 class="description">Headings</h4>

            <div class="demo">
              <h1>h1. Heading 1</h1>
              <h2>h2. Heading 2</h2>
              <h3>h3. Heading 3</h3>
              <h4>h4. Heading 4</h4>
              <h5>h5. Heading 5</h5>
            </div> <!-- .demo -->

            <div class="code">
              <pre><code class="hljs html">&lt;h1&gt;h1. Heading 1&lt;&frasl;h1&gt;
&lt;h2&gt;h2. Heading 2&lt;&frasl;h2&gt;
&lt;h3&gt;h2. Heading 3&lt;&frasl;h3&gt;
&lt;h4&gt;h3. Heading 4&lt;&frasl;h4&gt;
&lt;h5&gt;h4. Heading 5&lt;&frasl;h5&gt;</code></pre>
            </div> <!-- .code -->
          </div> <!-- .row -->

          <div class="row">
            <h4 class="description">Paragraph, <a href="#">Anchor link</a>, <strong>Strong</strong>, <em>Emphasis</em> &amp; <strike>Strike</strike></h4>

            <div class="demo">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, <a href="#">sed do eiusmod tempor</a> incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

              <p>Duis aute irure dolor in reprehenderit in voluptate <strong>velit esse cillum dolore</strong> eu fugiat <em>nulla pariatur.</em> Excepteur sint occaecat cupidatat non proident, sunt in culpa <strike>qui officia deserunt mollit</strike> anim id est laborum.</p>
            </div><!-- .demo -->

            <div class="code">
      <pre><code>&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, &lt;a href="#"&gt;sed do eiusmod tempor&lt;&frasl;a&gt; incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.&lt;&frasl;p&gt;

&lt;p&gt;Duis aute irure dolor in reprehenderit in voluptate &lt;strong&gt;velit esse cillum dolore&lt;&frasl;strong&gt; eu fugiat &lt;em&gt;nulla pariatur.&lt;&frasl;em&gt; Excepteur sint occaecat cupidatat non proident, sunt in culpa &lt;strike&gt;qui officia deserunt mollit&lt;&frasl;strike&gt; anim id est laborum.&lt;&frasl;p&gt;</code></pre>
            </div> <!-- .code -->
          </div> <!-- .row -->


          <div class="row">
            <h4 class="description">Blockquote</h4>

            <div class="demo">
              <blockquote>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.

                <footer><a href="#">This is the author.</a></footer>
              </blockquote>
            </div> <!-- .demo -->

            <div class="code">

            <pre><code>&lt;blockquote&gt;
  Lorem ipsum dolor sit amet, consectetur adipisicing elit.

  &lt;footer&gt;&lt;a href="#"&gt;This is the author.&lt;&frasl;a&gt;&lt;&frasl;footer&gt;
&lt;&frasl;blockquote&gt;</pre></code>
            </div> <!-- .code -->

            <a class="button-primary" href="typography.html"><i class="fa fa-link"></i> Full Typography Demo</a>

          </div> <!-- .row -->
        </div> <!-- .container -->
      </section>

              <!-- Grid System -->
      <section class="section-grid-system section-demo">
        <div class="container">
          <h2 class="title">Grid System</h2>

          <h4 class="description">12 columns grid demo</h4>

          <div class="row">
            <div class="col-1-1">
              <div class="demo-col">.col-1-1</div>
            </div> <!-- .col-1-1 -->
          </div> <!-- .row -->

          <div class="row">
            <div class="col-1-2">
              <div class="demo-col">.col-1-2</div>
            </div> <!-- .col-1-2 -->

            <div class="col-1-2">
              <div class="demo-col">.col-1-2</div>
            </div> <!-- .col-1-2 -->
          </div> <!-- .row -->

          <div class="row">
            <div class="col-1-3">
              <div class="demo-col">.col-1-3</div>
            </div> <!-- .col-1-3 -->
            <div class="col-1-3">
              <div class="demo-col">.col-1-3</div>
            </div> <!-- .col-1-3 -->
            <div class="col-1-3">
              <div class="demo-col">.col-1-3</div>
            </div> <!-- .col-1-3 -->
          </div> <!-- .row -->

          <div class="row">
            <div class="col-1-4">
              <div class="demo-col">.col-1-4</div>
            </div> <!-- .col-1-4 -->
            <div class="col-1-4">
              <div class="demo-col">.col-1-4</div>
            </div> <!-- .col-1-4 -->
            <div class="col-1-4">
              <div class="demo-col">.col-1-4</div>
            </div> <!-- .col-1-4 -->
            <div class="col-1-4">
              <div class="demo-col">.col-1-4</div>
            </div> <!-- .col-1-4 -->
          </div> <!-- .row -->

          <div class="row">
            <div class="code">
              <pre><code class="html">&lt;div class=&quot;row&quot;&gt;
  &lt;div class=&quot;col-1-3&quot;&gt;
    &lt;div class=&quot;demo-col&quot;&gt;.col-1-3&lt;&frasl;div&gt;
  &lt;&frasl;div&gt; &lt;!-- col-1-3 --&gt;

  &lt;div class=&quot;col-1-3&quot;&gt;
    &lt;div class=&quot;demo-col&quot;&gt;.col-1-3&lt;&frasl;div&gt;
  &lt;&frasl;div&gt; &lt;!-- col-1-3 --&gt;

  &lt;div class=&quot;col-1-3&quot;&gt;
    &lt;div class=&quot;demo-col&quot;&gt;.col-1-3&lt;&frasl;div&gt;
  &lt;&frasl;div&gt; &lt;!-- end col-1-3 --&gt;
&lt;&frasl;div&gt; &lt;!-- end row --&gt;</code></pre>
              </div> <!-- .code -->
              </div> <!-- .row -->
            </div> <!-- .container -->
          </section>

          <section class="section-buttons section-demo">
            <div class="container">
              <h2 class="title">Buttons</h2>

              <div class="row">
                <h4 class="description">Button default</h4>

                <div class="demo">
                  <button class="button">Button</button>
                  <a href="#" class="button">Anchor tag</a>
                  <input type="submit" class="button" value="Submit input">
                  <input type="button" class="button" value="Button input">
                </div> <!-- .demo -->

                <div class="code">
      <pre><code class="hljs html">&lt;button class="button"&gt;button&lt;&frasl;button&gt;
&lt;a href="#" class="button"&gt;Anchor tag&lt;&frasl;a&gt;
&lt;input type="submit" class="button" value="Submit input"&gt;
&lt;input type="button" class="button" value="Button input"&gt;</code></pre>
                </div> <!-- .code -->
              </div> <!-- .row -->

              <div class="row">
                <h4 class="description">Button primary</h4>

                <div class="demo">
                  <button class="button-primary">Button</button>
                  <a href="#" class="button-primary">Anchor tag</a>
                  <input type="submit" class="button-primary" value="Submit input">
                  <input type="button" class="button-primary" value="Button input">
                </div> <!-- .demo -->

                <div class="code">
                  <pre><code class="hljs html">&lt;button class="button"&gt;button&lt;&frasl;button&gt;
&lt;a href="#" class="button"&gt;Anchor tag&lt;&frasl;a&gt;
&lt;input type="submit" class="button" value="Submit input"&gt;
&lt;input type="button" class="button" value="Button input"&gt;</code></pre>
                </div> <!-- .code -->
              </div> <!-- .row -->


              <div class="row">
                <h4 class="description">Button small</h4>

                <div class="demo">
                  <button class="button-small">Button</button>
                  <a href="#" class="button-small">Anchor tag</a>
                  <input type="submit" class="button-small" value="Submit input">
                  <input type="button" class="button-small" value="Button input">
                </div>

                <div class="code">
                  <pre><code class="hljs html">&lt;button class="button-small"&gt;button&lt;&frasl;button&gt;
&lt;a href="#" class="button-small"&gt;Anchor tag&lt;&frasl;a&gt;
&lt;input type="submit" class="button-small" value="Submit input"&gt;
&lt;input type="button" class="button-small" value="Button input"&gt;</code></pre>
                </div> <!-- .code -->
              </div> <!-- .row -->

              <div class="row">
                <h4 class="description">Button large</h4>

                <div class="demo">
                  <button class="button-large">Button</button>
                  <a href="#" class="button-large">Anchor tag</a>
                  <input type="submit" class="button-large" value="Submit input">
                  <input type="button" class="button-large" value="Button input">
                </div>

                <div class="code">
                  <pre><code class="hljs html">&lt;button class="button-large"&gt;button&lt;&frasl;button&gt;
&lt;a href="#" class="button"&gt;Anchor tag&lt;&frasl;a&gt;
&lt;input type="submit" class="button-large" value="Submit input"&gt;
&lt;input type="button" class="button-large" value="Button input"&gt;</code></pre>
                </div> <!-- .code -->
              </div> <!-- .row -->
            </div> <!-- .container -->
          </section>

          <section class="section-forms section-demo">
            <div class="container">
              <h2 class="title">Forms</h2>

              <div class="row">
                <div class="col-1-2">
                  <form action="">
                    <fieldset>
                      <legend>Inputs</legend>

                      <div class="field-group">
                        <label for="demo-input-1">This is a label</label>
                        <input type="text" id="demo-input-1" placeholder="This is a text input" />

                        <p class="help">This is a contextual help for the field above.</p>
                      </div> <!-- .field-group -->

                      <div class="field-group field-error">
                        <label for="demo-input-2">Error field</label>
                        <input type="text" id="demo-input-2" placeholder="This is a text input" />

                        <p class="help">This is an error message for the field above.</p>
                      </div> <!-- .field-group -->
                      <div class="field-group">
                        <label for="demo-textarea">This is a label</label>
                        <textarea name="demo-textarea" id="demo-textarea" cols="30" rows="4" placeholder="This is a textarea"></textarea>
                      </div> <!-- .field-group -->

                      <div class="field-group">
                        <input type="submit" class="button" value="Submit">
                      </div> <!-- .field-group -->
                    </fieldset>
                  </form>
                </div> <!-- .col-1-2 -->

                <div class="col-1-2">
                    <form action="">
                    <fieldset>
                      <legend>Contact Form</legend>

                      <div class="field-group">
                        <label for="contact-name">Name: <span class="required">*</span></label>
                        <input type="text" id="contact-name" name="contact-name">
                      </div> <!-- .field-group -->

                      <div class="field-group">
                        <label for="contact-email">Email address: <span class="required">*</span></label>
                        <input type="email" id="contact-email" name="contact-email">
                      </div> <!-- .field-group -->

                      <div class="field-group">
                        <label for="contact-website">Website:</label>
                        <input type="url" id="contact-website" name="contact-website">
                      </div> <!-- .field-group -->

                      <div class="field-group">
                        <label for="contact-textarea">Message: <span class="required">*</span></label>
                        <textarea name="contact-textarea" id="contact-textarea" cols="30" rows="4" class="field-fw"></textarea>
                      </div> <!-- .field-group -->

                      <div class="field-group">
                        <input type="submit" class="button" value="Submit">
                      </div> <!-- .field-group -->

                      <p><em><span class="required">*</span> required fields</em></p>
                    </fieldset>
                  </form>
                </div> <!-- .col-1-2 -->
              </div> <!-- .row -->

              <div class="row">
                <div class="col-1-2">
                  <form action="">
                    <fieldset>
                      <legend>Sign-in Form</legend>

                      <div class="field-group">
                        <label for="sign-in-username">Username: <span class="required">*</span></label>
                        <input type="text" id="sign-in-username" name="sign-in-username">
                      </div> <!-- .field-group -->

                      <div class="field-group">
                        <label for="sign-in-pwd">Password: <span class="required">*</span></label>
                        <input type="password" id="sign-in-pwd" name="sign-in-pwd">
                      </div> <!-- field-group -->

                      <div class="field-group">
                        <input type="checkbox" id="sign-in-checkbox" name="sign-in-checkbox" />
                        <label for="sign-in-checkbox">Remember me</label>
                      </div> <!-- field-group -->

                      <div class="field-group">
                        <input type="submit" class="button" value="Sign In">
                      </div> <!-- field-group -->

                      <p><em><span class="required">*</span> required fields</em></p>
                    </fieldset>
                  </form>
                </div> <!-- .col-1-2 -->

                <div class="col-1-2">
                  <form action="">
                    <fieldset>
                      <legend>Sign-up Form</legend>

                      <div class="field-group">
                        <label for="sign-up-email">Email address: <span class="required">*</span></label>
                        <input type="email" id="sign-up-email" name="sign-up-email">
                      </div> <!-- field-group -->

                      <div class="field-group">
                        <label for="sign-up-name">Username: <span class="required">*</span></label>
                        <input type="text" id="sign-up-username" name="sign-up-username">
                      </div> <!-- field-group -->

                      <div class="field-group">
                        <label for="sign-up-pwd">Password: <span class="required">*</span></label>
                        <input type="password" id="sign-up-pwd" name="sign-up-pwd">
                      </div> <!-- field-group -->

                      <div class="field-group">
                        <label for="sign-up-confirm-pwd">Confirm Password: <span class="required">*</span></label>
                        <input type="password" id="sign-up-confirm-pwd" name="sign-up-confirm-pwd">
                      </div> <!-- field-group -->

                      <div class="field-group">
                        <input type="submit" class="button" value="Sign Up">
                      </div> <!-- field-group -->

                      <p><em><span class="required">*</span> required fields</em></p>
                    </fieldset>
                  </form>
                </div> <!-- .col-1-2 -->
              </div> <!-- .row -->

              <div class="row">
                <div class="col-1-1">
                  <form>
                    <fieldset>
                      <legend>Radio buttons and checkboxes</legend>

                      <div class="field-group">
                        <input type="radio" name="demo-radio" id="demo-radio-1"/>
                        <label for="demo-radio-1">Radio 1</label>

                        <input type="radio" name="demo-radio" id="demo-radio-2"/>
                        <label for="demo-radio-2">Radio 2</label>

                        <input type="radio" name="demo-radio" id="demo-radio-3"/>
                        <label for="demo-radio-3">Radio 3</label>
                      </div> <!-- .field-group -->

                      <div class="field-group">
                        <input type="checkbox" id="demo-checkbox" name="demo-checkbox">
                        <label for="demo-checkbox">This is a checkbox</label>
                      </div> <!-- .field-group -->
                    </fieldset>
                  </form>
                </div> <!-- .col-1-1 -->
              </div> <!-- .row -->
            </div> <!-- .container -->
          </section>

          <section class="section-icons section-demo">
            <div class="container">
              <h2 class="title">Icons</h2>

              <div class="row">
                <div class="col-1-2">
                  <h4 class="description">Bordered icons</h4>

                  <div class="icon-circle">
                    <i class="fa fa-coffee"></i>
                  </div> <!-- .icon-circle -->

                  <p>Circle</p>

                  <div class="icon-rounded">
                    <i class="fa fa-coffee"></i>
                  </div> <!-- .icon-rounded -->

                  <p>Rounded</p>

                  <div class="icon-square">
                    <i class="fa fa-coffee"></i>
                  </div> <!-- .icon-square -->

                  <p>Square</p>
                </div> <!-- .col-1-2 -->

                <div class="col-1-2">
                  <h4 class="description">Icon sizes</h4>

                  <div class="icon-circle">
                    <i class="fa fa-coffee"></i>
                  </div> <!-- .icon-circle -->

                  <p>Regular</p>

                  <div class="icon-rounded icon-large">
                    <i class="fa fa-coffee"></i>
                  </div> <!-- .icon-rounded -->

                  <p>Large</p>

                  <div class="icon-square icon-huge">
                    <i class="fa fa-coffee"></i>
                  </div> <!-- .icon-square -->

                  <p>Huge</p>

                </div> <!-- .col-1-2 -->
              </div> <!-- .row -->
            </div> <!-- .container -->
          </section>

          <section class="section-feedback section-demo">
            <div class="container">
              <h2 class="title">Feedback</h2>

              <div class="row">
                <div class="demo">
                  <div class="alert-information">
                    <p><strong>Information</strong></p>
                    <p>This is the body of the message!</p>
                  </div> <!-- .alert-information -->
                </div> <!-- .demo -->

                <div class="code">
                  <pre><code class="hljs html">&lt;div class="alert-information"&gt;
  &lt;p&gt;&lt;strong&gt;information&lt;&frasl;strong&gt;&lt;&frasl;p&gt;
  &lt;p&gt;This is the body of the message!&lt;&frasl;p&gt;
&lt;&frasl;div&gt; &lt;!-- .alert-information --&gt;</code></pre>
                </div> <!-- .code -->

                <div class="demo">
                  <div class="alert-error">
                    <p><strong>Error</strong></p>
                    <p>This is the body of the message!</p>
                  </div> <!-- .alert-information -->
                </div> <!-- .demo -->

                <div class="code">
                  <pre><code class="hljs html">&lt;div class="alert-error"&gt;
  &lt;p&gt;&lt;strong&gt;Error&lt;&frasl;strong&gt;&lt;&frasl;p&gt;
  &lt;p&gt;This is the body of the message!&lt;&frasl;p&gt;
&lt;&frasl;div&gt; &lt;!-- .alert-error --&gt;</code></pre>
                </div> <!-- .code -->

                <div class="demo">
                  <div class="alert-warning">
                    <p><strong>Warning</strong></p>
                    <p>This is the body of the message!</p>
                  </div> <!-- .alert-information -->
                </div> <!-- .demo -->

                <div class="code">
                  <pre><code class="hljs html">&lt;div class="alert-warning"&gt;
  &lt;p&gt;&lt;strong&gt;Warning&lt;&frasl;strong&gt;&lt;&frasl;p&gt;
  &lt;p&gt;This is the body of the message!&lt;&frasl;p&gt;
&lt;&frasl;div&gt; &lt;!-- .alert-error --&gt;</code></pre>
                </div> <!-- .code -->

                <div class="demo">
                  <div class="alert-success">
                    <p><strong>Success</strong></p>
                    <p>This is the body of the message!</p>
                  </div> <!-- .alert-information -->
                </div> <!-- .demo -->

                <div class="code">
                  <pre><code class="hljs html">&lt;div class="alert-success"&gt;
  &lt;p&gt;&lt;strong&gt;Success&lt;&frasl;strong&gt;&lt;&frasl;p&gt;
  &lt;p&gt;This is the body of the message!&lt;&frasl;p&gt;
&lt;&frasl;div&gt; &lt;!-- .alert-error --&gt;</code></pre>
                </div> <!-- .code -->
              </div> <!-- .row -->
            </section>
          </div> <!-- .container -->
        </main> <!-- .main-content -->

<?php include('includes/footer.php'); ?>
