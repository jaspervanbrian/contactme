<template>
	<!-- Download Section -->
	<section id="download" class="download-section content-section text-center">
		<div class="container">
			<div class="col-lg-8 mx-auto">
				<h2>Download my resume</h2>
				<p>You can download my resume here.</p>
				<a :href="downloadResume" class="btn btn-default btn-lg" download="jasper_martin">
					<font-awesome-icon icon="download" />
					Download
				</a>
			</div>
		</div>
	</section>
</template>

<script>
  import FontAwesomeIcon from '@fortawesome/vue-fontawesome';
  export default {
  	data() {
  		return {
  			downloadResume: "/resume/jasper_martin.pdf",
  		}
  	},
    components: {
      FontAwesomeIcon,
    }
  }
</script>