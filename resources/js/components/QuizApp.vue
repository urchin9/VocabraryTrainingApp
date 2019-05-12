<template>
    <div class="quiz-container" v-if="words[i]">
    <h1>Quiz</h1>
    <p>{{ words[i].word }}</p>
    <p>{{ meaning }}</p> 
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
            meaning: '???',
            example:  '????'
        }
    },
    methods: {
        randomNumber() {
            this.i = Math.floor(Math.random() * this.words.length);
            this.meaning = '???';
            this.example = '????';
        },
        revealAnswer() {
            if (this.meaning !== '???' && this.example !== '????') {
                return;
            }
            this.meaning = this.words[this.i].meaning;
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
