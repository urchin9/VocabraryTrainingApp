<template>
    <div class="quiz-container" v-if="words[i]">
    <h1>Quiz</h1>
    <p>{{ words[i].meaning }}</p>
    <p>{{ word }}</p> 
    <p>{{ example }}</p>
    <button class="btn answer" v-on:click="revealAnswer">Answer</button>
    <button class="btn next" v-on:click="randomNumber">Next</button>
    </div>
</template>

<script>
export default {
    data() {
        return {
            words: [],
            i: 0,
            word: '???',
            example:  '????'
        }
    },
    methods: {
        randomNumber() {
            this.i = Math.floor(Math.random() * this.words.length);
            this.word = '???';
            this.example = '????';
        },
        revealAnswer() {
            if (this.word !== '???' && this.example !== '????') {
                return;
            }
            this.word = this.words[this.i].word;
            this.example = this.words[this.i].example;
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

.answer {
    margin: 50px auto 30px;
    background: #637d59;
}

</style>
