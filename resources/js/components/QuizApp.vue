<template>
    <div class="quiz-container" v-if="words[i]">
    <h1>Quiz</h1>
    <p>{{ words[i].word }}</p>
    <p>{{ words[i].meaning }}</p> 
    <p>{{ words[i].example }}</p>
    <button class="btn next" v-on:click="randomNumber">Next</button>
    </div>
</template>

<script>
export default {
    data() {
        return {
            words: [],
            i: 0
        }
    },
    methods: {
        'randomNumber': function() {
            this.i = Math.floor(Math.random() * this.words.length);
            console.log(this.i);
        }
    },
    mounted() {
        axios.get('/quiz/words')
            .then((response) => {
                this.words = response.data.words;
        });
    }
}
</script>
<style lang="scss" scoped>
.quiz-container p {
    text-align: center;
    background: #ffffff73;
    width: 85%;
    margin: 10px auto 30px;
    line-height: 2;
}

.next {
    background: #9cc48e;
}

</style>
