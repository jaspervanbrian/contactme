<template>
    <!-- Footer -->
    <footer class="footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <ul class="list-inline mb-2">
              <li class="list-inline-item">
                <a href="#about" class="js-scroll-trigger">About</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#followme" class="js-scroll-trigger">Follow Me</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#insights" class="js-scroll-trigger">Insights</a>
              </li>
            </ul>
            <p class="text-muted small mb-4 mb-lg-0">&copy; Jasper Martin {{ yearNow }}. All Rights Reserved.</p>
          </div>
          <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
            <ul class="list-inline mb-0">
              <li class="list-inline-item mr-3">
                <a href="#!" @click="openTwitter">
                	<font-awesome-icon :icon="['fab', 'twitter']" />
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#!" @click="openGitHub">
                	<font-awesome-icon :icon="['fab', 'github']" />
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#!" @click="openLinkedIn">
                	<font-awesome-icon :icon="['fab', 'linkedin']" />
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
</template>

<script>
	import FontAwesomeIcon from '@fortawesome/vue-fontawesome';
	export default {
		methods: {
			openTwitter() {
				window.open("https://twitter.com/jaspervanbrian");
			},
			openGitHub() {
				window.open("https://github.com/jaspervanbrian");
			},
			openLinkedIn() {
				window.open("https://www.linkedin.com/in/jasper-martin-29348a138/");
			}
		},
		computed: {
			yearNow() {
				return moment().format('YYYY');
			}
		},
		components: {
			FontAwesomeIcon,
		}
	}
</script>