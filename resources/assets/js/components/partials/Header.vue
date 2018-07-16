<template>
  <!-- Intro Header -->
  <header class="masthead">
    <div class="intro-body">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <div class="row">
              <div class="col-5">
                <h1 class="brand-heading border-right">Hello!</h1>
              </div>
              <div class="col-7">
                <p class="intro-text">
                  I'm Jasper.
                  <br>
                  <span id="typed"></span>
                </p>
                <div id="typed-strings">
                  <p>I am an enthusiastic <strong>web developer.</strong></p>
                  <p>I am <em>passionate</em> about creating meaningful web applications.</p>
                  <p>I am <em>eager</em> about helping other people.</p>
                  <p>I want to make the world a <strong>better</strong> place.</p>
                </div>
              </div>
            </div>
            <div class="row text-center">
              <div class="col-12">
                <a href="#about" class="btn btn-circle js-scroll-trigger">
                  <font-awesome-icon icon="angle-double-down" />
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
</template>

<script>
  import FontAwesomeIcon from '@fortawesome/vue-fontawesome';
  export default {
    components: {
      FontAwesomeIcon,
    }
  }
</script>