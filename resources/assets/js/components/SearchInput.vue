<template>
    <form>
        <div class="form-group">
            <input type="text" name="" class="form-control" v-model="word" v-on:keyup="searchKeyword" />
            <ul>
                <li v-for="keyword in keywords">{{ keyword.text }}</li>
            </ul>
        </div>
    </form>
</template>

<script>
    export default {
        data() {
            return {
                word: '',
                keywords: []
            }
        },
        mounted() {
            console.log('Google Search Input mounted.')
        },
        computed: {
            
        },
        methods: {
            'searchKeyword': _.debounce(function() {
                if(!this.word) {
                    this.keywords = [];
                }
                this.$emit('show-loading');
                axios.get('/search?key=' + this.word).then((response) => {
                    this.keywords = response.data;
                    this.$emit('hide-loading');
                });
            }, 500)
        }
    }
</script>
