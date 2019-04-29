<template>
	<!-- Follow Me Section -->
	<section id="followme" class="followme-section content-with-bg-section text-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mx-auto">
					<h2>Follow Me!</h2>
					<p>
						Feel free to follow me on these accounts. Cheers!
					</p>
					<ul class="list-inline banner-social-buttons">
						<li class="list-inline-item">
							<a href="#!" class="btn btn-default btn-lg" @click="openTwitter">
                				<font-awesome-icon :icon="['fab', 'twitter']" />
								<span class="network-name">Twitter</span>
							</a>
						</li>
						<li class="list-inline-item">
							<a href="#!" class="btn btn-default btn-lg" @click="openMedium">
                				<font-awesome-icon :icon="['fab', 'medium']" />
								<span class="network-name">Medium</span>
							</a>
						</li>
						<li class="list-inline-item">
							<a href="#!" class="btn btn-default btn-lg" @click="openGitHub">
								<font-awesome-icon :icon="['fab', 'github']" />
								<span class="network-name">Github</span>
							</a>
						</li>
						<li class="list-inline-item">
							<a href="#!" class="btn btn-default btn-lg" @click="openLinkedIn">
								<font-awesome-icon :icon="['fab', 'linkedin']" />
								<span class="network-name">Linkedin</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
</template>

<script>
	import FontAwesomeIcon from '@fortawesome/vue-fontawesome';
	export default {
		methods: {
			openTwitter() {
				window.open("https://twitter.com/jaspervanbrian");
			},
			openMedium() {
				window.open("https://medium.com/@jaspervanbrian");
			},
			openGitHub() {
				window.open("https://github.com/jaspervanbrian");
			},
			openLinkedIn() {
				window.open("https://www.linkedin.com/in/jasper-martin-29348a138/");
			}
		},
		components: {
			FontAwesomeIcon,
		}
	}
</script>