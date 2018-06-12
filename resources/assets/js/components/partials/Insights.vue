<template>
    <section id="insights" class="content-section">
        <div class="container py-2">
            <h2 class="text-center text-muted py-3">Insights from other people.</h2>
            <div class="row">
                <div class="col-4">
                    
                </div>
                <div class="col-8">
                    <insight
                        v-for="(insight, index) in insights.data"
                        :key="insight.id"
                        :insight="insight"
                    ></insight>
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
                })
                .catch((response) => {
                    console.log(response);
                });
            },
        },
        components: {
            insight,
        }
    }
</script>