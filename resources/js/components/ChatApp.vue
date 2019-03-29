<template>
    <div class="chat-app">
        <ContactsList :contacts="contacts"/>
        // <ContactsList :contacts="contacts" @selected="startConversationWith"/>
        // <Conversation :contact="selectedContact" :messages="messages" @new="saveNewMessage"/>
    </div>
</template>

<script>
    // import Conversation from './Conversation';
    import ContactsList from './ContactsList';

    export default {
        props: {
            user: {
                type: Object,
                required: true
            }
        },
        data() {
            return {
                selectedContact: null,
                messages: [],
                contacts: []
            };
        },
        mounted() {
            axios.get('/contacts')
                .then((response) => {
                    console.log(response.data);
                    this.contacts = response.data;
                });
        },
        // components: {ContactsList}
    }
</script>

<style lang="scss" scoped>
.chat-app {
    display: flex;
}
</style>
