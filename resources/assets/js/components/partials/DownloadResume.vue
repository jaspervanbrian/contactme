<template>
	<!-- Download Section -->
	<section id="contact" class="download-section content-with-bg-section text-center">
		<div class="container-fluid" id="contact-me-container">
			<div class="row mb-4">
				<div class="col-lg-8 mx-auto">
					<h2>More about me...</h2>
					<p>In here, you can download my resume.</p>
					<a :href="downloadResume" class="btn btn-default btn-lg" download="jasper_martin">
						<font-awesome-icon icon="download" />
						Download
					</a>
				</div>
			</div>
			<hr>
			<div class="row mt-4">
				<div class="col-6 mx-auto">
					<p>If you have further questions or inquiries, feel free to leave a message/feedback on my email: jaspervanbrianmartin@gmail.com</p>
				</div>
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