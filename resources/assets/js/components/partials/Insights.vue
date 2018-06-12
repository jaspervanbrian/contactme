<template>
    <section id="insights" class="insight-section content-section">
        <div class="container py-2">
            <h2 class="text-center text-muted py-3">Insights from other people.</h2>
            <hr>
            <div class="row my-2">
                <div class="col-4 align-content-center">
                    <div class="form-group">
                        <label for="from">Your insights about me.</label>
                        <input type="text" class="form-control" placeholder="Your name" name="from" id="from" v-model="from"
                        v-focus  @keydown="checkFrom" @keyup="checkFrom" :class="{ 'is-invalid' : !fromValid }">
                    </div>
                    <div class="form-group">
                        <textarea v-model="body" name="body" id="body" cols="30" rows="7" placeholder="Write your insights here!" class="form-control" @keydown="checkBody" @keyup="checkBody" :class="{ 'is-invalid' : !bodyValid }"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-outline-primary" :disabled="!isValid" @click="submitInsight">Submit</button>
                        <small class="float-right" :class="{ 'text-danger' : !bodyValid }">{{ availableChars }}</small>
                    </div>
                </div>
                <div class="col-8">
                    <insight
                        v-for="(insight, index) in insights.data"
                        :key="insight.id"
                        :insight="insight"
                    ></insight>
                    <div class="row mt-4">
                        <div class="col-12">
                            <pagination :data="insights" @pagination-change-page="getInsights"></pagination>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    import insight from './InsightComponent.vue';
    export default {
        data() {
            return {
                insights: {},
                from: "",
                body: "",
                fromValid: true,
                bodyValid: true,
                isValid: true,
            }
        },
        created() {
            this.getInsights();
        },
        methods: {
            getInsights(page = 1) {
                axios.get(`messages?page=${page}`)
                .then((response) => {
                    this.insights = response.data;
                    console.log(this.insights);
                })
                .catch((response) => {
                    console.log(response);
                });
            },
            submitInsight() {
                if (this.from.trim() !== "" && this.body.trim() !== "" && this.isValid) {
                    axios.post("messages", {
                        from: this.from.trim(),
                        body: this.body.trim(),
                    })
                    .then((response) => {
                        this.getInsights();
                        this.from = "";
                        this.body = "";
                    })
                    .catch((response) => {
                        console.log(response);
                    });
                }
            },
            checkFrom() {
                if (this.from.length > 255) {
                    this.fromValid = false;
                    this.isValid = false;
                } else {
                    this.fromValid = true;
                }
                this.checkIsValid();
            },
            checkBody() {
                if (this.body.length > 255) {
                    this.bodyValid = false;
                    this.isValid = false;
                } else {
                    this.bodyValid = true;
                }
                this.checkIsValid();
            },
            checkIsValid() {
                if (this.fromValid && this.bodyValid) {
                    this.isValid = true;
                }
            },
        },
        computed: {
            availableChars() {
                return (255 - this.body.length);
            },
        },
        directives: {
            focus: {
                inserted(el) {
                    el.focus()
                }
            }
        },
        components: {
            insight,
        }
    }
</script>