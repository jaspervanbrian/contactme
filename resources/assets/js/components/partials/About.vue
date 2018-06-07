<template>
  <!-- About Section -->
  <section id="about" class="content-section text-center">
    <div class="container">
      <div class="row mb-3">
        <div class="col-12">
          <img :src="my_picture_src" class="rounded-circle" alt="" height="150">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="border-bottom">About Me</h2>
          <p>
            Everyone who knows me can be divided into two groups: those who like me and those who still don’t know me. Yes, you read that right! I am the most wonderful person you can find (just kidding). I am <strong>Jasper Martin</strong>, a web developer who aims to bring <em>excellent quality service</em> and <em>wonderful user experience</em> to all people (including you of course).
          </p>
          <p>
            I believe that in order to make the world a better place, one must be determined enough to make <em>progress</em> and to take <em>failures as lessons</em>. So with every small step we make, we can literally <em>flourish existing systems</em>, and <em>bring groundbreaking ideas</em> that will help shape the world.
          </p>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
  export default {
    data() {
      return {
        my_picture_src: '/img/me.png',
      }
    }
  }
</script>