<template>
	<div class="row">
		<div class="col-auto text-center flex-column d-none d-sm-flex">
			<div class="row h-50">
				<div class="col border-right">&nbsp;</div>
				<div class="col">&nbsp;</div>
			</div>
			<h5 class="m-2">
				<span class="badge badge-pill bg-success">&nbsp;</span>
			</h5>
			<div class="row h-50">
				<div class="col border-right">&nbsp;</div>
				<div class="col">&nbsp;</div>
			</div>
		</div>
		<div class="col py-2">
			<div class="card border-success shadow">
				<div class="card-body">
					<div class="float-right text-secondary">{{ fromNow }}</div>
					<h4 class="card-title text-success">{{ insight.from }}</h4>
					<p class="card-text">
						{{ insight.body }}
					</p>
					<button class="btn btn-sm btn-outline-secondary" type="button" :data-target="'#' + details" data-toggle="collapse" @click="toggleShow">Show Details <font-awesome-icon :icon="showed"></font-awesome-icon></button>
					<div class="collapse border" :id="details">
						<div class="p-2 text-monospace">
							Date posted: {{ dateDetails }}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	import FontAwesomeIcon from '@fortawesome/vue-fontawesome';
	export default {
        props: {
            insight: {
            	type: Object,
            	required: true,
            }
        },
        data() {
        	return {
        		showed: "caret-down",

        	}
        },
        methods: {
        	toggleShow() {
        		if (this.showed === "caret-up") {
        			this.showed = "caret-down";
        		} else {
        			this.showed = "caret-up";
        		}
        	},
        },
        computed: {
        	fromNow() {
        		return moment.utc(this.insight.created_at, "YYYY-MM-DD h:mm:ss").fromNow();
        	},
        	details() {
        		return "details" + this.insight.id;
        	},
        	dateDetails() {
        		return moment(this.insight.created_at).format('MMMM DD, YYYY | dddd, h:mm:ss a');
        	}
        },
        components: {
        	FontAwesomeIcon,
        },
	}
</script>