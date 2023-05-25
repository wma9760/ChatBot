
<script setup> 

import   '@/assets/css/style.css'
import   '@/assets/css/color.css'
import   '@/assets/js/jquery.min.js'
// import   '@/assets/css/markdown.css'
import   '@/assets/css/highlight.dark.min.css'
import { useForm } from '@inertiajs/vue3'
import {Link} from '@inertiajs/vue3'
// import   '@/assets/js/feather.min.js'

// import '@/assets/js/showdown.min.js'
import '@/assets/js/ai-chat.js'
// import '@/assets/js/highlight.min.js'
const form=useForm({
  prompt:"",
});

const props=defineProps({
    messages:Array,
    chat:null|Object
})
const submit=()=>{
    const url=props.chat?`/chat/${props.chat?.id}/`:'/chat'
    const id=props.chat?.id
  form.post('/chat/'+id);
  console.log('url',url)
}

</script>
<style>
:root {
    --theme-color-0_01: rgba(16, 163, 127, 0.01);
    --theme-color-0_02: rgba(16, 163, 127, 0.02);
    --theme-color-0_03: rgba(16, 163, 127, 0.03);
    --theme-color-0_04: rgba(16, 163, 127, 0.04);
    --theme-color-0_05: rgba(16, 163, 127, 0.05);
    --theme-color-0_06: rgba(16, 163, 127, 0.06);
    --theme-color-0_07: rgba(16, 163, 127, 0.07);
    --theme-color-0_08: rgba(16, 163, 127, 0.08);
    --theme-color-0_09: rgba(16, 163, 127, 0.09);
    --theme-color-0_1: rgba(16, 163, 127, 0.1);
    --theme-color-0_11: rgba(16, 163, 127, 0.11);
    --theme-color-0_12: rgba(16, 163, 127, 0.12);
    --theme-color-0_13: rgba(16, 163, 127, 0.13);
    --theme-color-0_14: rgba(16, 163, 127, 0.14);
    --theme-color-0_15: rgba(16, 163, 127, 0.15);
    --theme-color-0_16: rgba(16, 163, 127, 0.16);
    --theme-color-0_17: rgba(16, 163, 127, 0.17);
    --theme-color-0_18: rgba(16, 163, 127, 0.18);
    --theme-color-0_19: rgba(16, 163, 127, 0.19);
    --theme-color-0_2: rgba(16, 163, 127, 0.2);
    --theme-color-0_21: rgba(16, 163, 127, 0.21);
    --theme-color-0_22: rgba(16, 163, 127, 0.22);
    --theme-color-0_23: rgba(16, 163, 127, 0.23);
    --theme-color-0_24: rgba(16, 163, 127, 0.24);
    --theme-color-0_25: rgba(16, 163, 127, 0.25);
    --theme-color-0_26: rgba(16, 163, 127, 0.26);
    --theme-color-0_27: rgba(16, 163, 127, 0.27);
    --theme-color-0_28: rgba(16, 163, 127, 0.28);
    --theme-color-0_29: rgba(16, 163, 127, 0.29);
    --theme-color-0_3: rgba(16, 163, 127, 0.3);
    --theme-color-0_31: rgba(16, 163, 127, 0.31);
    --theme-color-0_32: rgba(16, 163, 127, 0.32);
    --theme-color-0_33: rgba(16, 163, 127, 0.33);
    --theme-color-0_34: rgba(16, 163, 127, 0.34);
    --theme-color-0_35: rgba(16, 163, 127, 0.35);
    --theme-color-0_36: rgba(16, 163, 127, 0.36);
    --theme-color-0_37: rgba(16, 163, 127, 0.37);
    --theme-color-0_38: rgba(16, 163, 127, 0.38);
    --theme-color-0_39: rgba(16, 163, 127, 0.39);
    --theme-color-0_4: rgba(16, 163, 127, 0.4);
    --theme-color-0_41: rgba(16, 163, 127, 0.41);
    --theme-color-0_42: rgba(16, 163, 127, 0.42);
    --theme-color-0_43: rgba(16, 163, 127, 0.43);
    --theme-color-0_44: rgba(16, 163, 127, 0.44);
    --theme-color-0_45: rgba(16, 163, 127, 0.45);
    --theme-color-0_46: rgba(16, 163, 127, 0.46);
    --theme-color-0_47: rgba(16, 163, 127, 0.47);
    --theme-color-0_48: rgba(16, 163, 127, 0.48);
    --theme-color-0_49: rgba(16, 163, 127, 0.49);
    --theme-color-0_5: rgba(16, 163, 127, 0.5);
    --theme-color-0_51: rgba(16, 163, 127, 0.51);
    --theme-color-0_52: rgba(16, 163, 127, 0.52);
    --theme-color-0_53: rgba(16, 163, 127, 0.53);
    --theme-color-0_54: rgba(16, 163, 127, 0.54);
    --theme-color-0_55: rgba(16, 163, 127, 0.55);
    --theme-color-0_56: rgba(16, 163, 127, 0.56);
    --theme-color-0_57: rgba(16, 163, 127, 0.57);
    --theme-color-0_58: rgba(16, 163, 127, 0.58);
    --theme-color-0_59: rgba(16, 163, 127, 0.59);
    --theme-color-0_6: rgba(16, 163, 127, 0.6);
    --theme-color-0_61: rgba(16, 163, 127, 0.61);
    --theme-color-0_62: rgba(16, 163, 127, 0.62);
    --theme-color-0_63: rgba(16, 163, 127, 0.63);
    --theme-color-0_64: rgba(16, 163, 127, 0.64);
    --theme-color-0_65: rgba(16, 163, 127, 0.65);
    --theme-color-0_66: rgba(16, 163, 127, 0.66);
    --theme-color-0_67: rgba(16, 163, 127, 0.67);
    --theme-color-0_68: rgba(16, 163, 127, 0.68);
    --theme-color-0_69: rgba(16, 163, 127, 0.69);
    --theme-color-0_7: rgba(16, 163, 127, 0.7);
    --theme-color-0_71: rgba(16, 163, 127, 0.71);
    --theme-color-0_72: rgba(16, 163, 127, 0.72);
    --theme-color-0_73: rgba(16, 163, 127, 0.73);
    --theme-color-0_74: rgba(16, 163, 127, 0.74);
    --theme-color-0_75: rgba(16, 163, 127, 0.75);
    --theme-color-0_76: rgba(16, 163, 127, 0.76);
    --theme-color-0_77: rgba(16, 163, 127, 0.77);
    --theme-color-0_78: rgba(16, 163, 127, 0.78);
    --theme-color-0_79: rgba(16, 163, 127, 0.79);
    --theme-color-0_8: rgba(16, 163, 127, 0.8);
    --theme-color-0_81: rgba(16, 163, 127, 0.81);
    --theme-color-0_82: rgba(16, 163, 127, 0.82);
    --theme-color-0_83: rgba(16, 163, 127, 0.83);
    --theme-color-0_84: rgba(16, 163, 127, 0.84);
    --theme-color-0_85: rgba(16, 163, 127, 0.85);
    --theme-color-0_86: rgba(16, 163, 127, 0.86);
    --theme-color-0_87: rgba(16, 163, 127, 0.87);
    --theme-color-0_88: rgba(16, 163, 127, 0.88);
    --theme-color-0_89: rgba(16, 163, 127, 0.89);
    --theme-color-0_9: rgba(16, 163, 127, 0.9);
    --theme-color-0_91: rgba(16, 163, 127, 0.91);
    --theme-color-0_92: rgba(16, 163, 127, 0.92);
    --theme-color-0_93: rgba(16, 163, 127, 0.93);
    --theme-color-0_94: rgba(16, 163, 127, 0.94);
    --theme-color-0_95: rgba(16, 163, 127, 0.95);
    --theme-color-0_96: rgba(16, 163, 127, 0.96);
    --theme-color-0_97: rgba(16, 163, 127, 0.97);
    --theme-color-0_98: rgba(16, 163, 127, 0.98);
    --theme-color-0_99: rgba(16, 163, 127, 0.99);
    --theme-color-1: rgba(16, 163, 127, 1);
}
</style>
<template>
  <!-- <div id="wrapper" class="" style=""> -->

    <div class="messages-container margin-top-0">
        <div class="messages-container-inner">
            <!-- Messages -->
            <div class="messages-inbox" :class="{ 'open': isOpen }">
              <div class="messages-headline">
                    <div class="input-with-icon">
                        <input id="conversation-search" type="text" placeholder="Search">
                        <i class="icon-material-outline-search"></i>
                    </div>
                </div>
                <ul id="conversations-wrapper">
                    <li v-for="(message, index) in messages" :key="message.id" :class="{ 'active': message.active }">
                      <Link :href="`/chat/${message.id}`" class="conversation" data-id="" @click="handleClick(index)">
                            <div class="message-by margin-left-0">
                                <div class="message-by-headline">
                                    <h5>{{message.context[0].content}}</h5>
                                    <!-- <input class="conversation-title with-border small-input" type="text" value="New Conversation"> -->
                                    <span class="conversation-time">{{message.created_at}}</span>
                                    <span class="conversation-edit"><i class="icon-feather-edit"></i> Edit</span>
                                </div>
                                <!-- <p class="conversation-msg">{{ message.context[0].content }}</p> -->
                            </div>
                        </Link>
                    </li>
                </ul>
                <div class="messages-inbox-bottom">
                    <Li :href="`/chat`"  id="new-conversation" class="button full-width button-sliding-icon" style="width: 269px;">New
                        Conversation <i class="icon-feather-plus"></i></Li>
                </div>
            </div>
            <!-- Messages / End -->
            <!-- Message Content -->
            <div class="message-content">
                <div class="messages-headline">
                    <h4 class="d-flex align-items-center">
                        <div class="user-avatar margin-right-10">
                            <img src="https://sana.aetsmsoft.agency/assets/images/profile/1139599543.png" alt="AI Chat Bot" width="25">
                        </div>
                        <div class="line-height-1">
                            <span>AI Chat Bot {{url}}</span>
                        </div>
                    </h4>
                    <div class="message-action">
                        <a href="#" class="button ripple-effect btn-sm d-md-none d-inline-block" @click="toggleInbox" id="show-conversations" title="Show Conversations" data-tippy-placement="top"><i class="icon-feather-menu"></i></a>
                        <a href="#" class="button ripple-effect btn-sm" id="export-chats" data-tippy-placement="top" data-tippy="" data-original-title="Export Conversation"><i class="icon-feather-download"></i></a>
                        <a href="#" class="button ripple-effect btn-sm red" id="delete-chats" data-tippy-placement="top" data-tippy="" data-original-title="Delete Conversation"><i class="icon-feather-trash-2"></i></a>
                    </div>
                </div>

                <!-- Message Content Inner -->
                <div class="message-content-inner" v-if="chat" >
                   <div v-for="(content,index) in chat?.context" :key="index">
                    <!-- <h1>{{content}}</h1> -->
                    <div id="dynamic-messages">
                        <div class="message-bubble me" v-if="content.role === 'user'">
                            <div class="message-bubble-inner">
                                <div class="message-avatar"><img src="https://sana.aetsmsoft.agency/assets/images/profile/images.png" alt="Sana"></div>
                                <div class="message-text" id="msg-undefined">

                                    <div class="markdown-body " >
                                        <p>{{content.content}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="message-bubble " v-else-if="content.role === 'assistance'">
                            <div class="message-bubble-inner">
                                <div class="message-avatar"><img src="https://sana.aetsmsoft.agency/assets/images/profile/1139599543.png" alt="AI Chat Bot"></div>
                                <div class="message-text" id="msg-1">
                                    <div class="typing-indicator" style="display: none;">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="markdown-body" style="">
                                        <p>{{content.content}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    
                   </div>
                    <div id="conversation-loader" class="button-progress" style="display: none;"></div>
                </div>
                <!-- Message Content Inner / End -->

                <!-- Reply Area -->
                <form id="ai-chat-form" @submit.prevent="submitForm">

                    <div class="message-reply">
                        <input type="hidden" name="bot_id" id="bot_id" value="">
                        <textarea placeholder="Type your message here (Use Enter to send)"
                         id="ai-chat-textarea" rows="1" 
                         v-model="form.prompt" 
                         @keyup.enter="submit" 
                         :disabled="form.processing"></textarea>
                        <div>
                            <button v-if="!form.processing" id="chat-send-button" type="submit" class="button ripple-effect" @click="submit">
                                Send </button>
                                <button v-if="form.processing" id="chat-send-button"  class="button ripple-effect">
                                    Processing </button>
                            
                        </div>
                    </div>
                    <div class="form-error message-reply padding-top-10 padding-bottom-10">
                    </div>
                </form>

            </div>
            <!-- Message Content -->

        </div>
    </div>

<!-- </div> -->
  </template>
  <script>
  export default {
    data() {
      return {
        isOpen: false
      };
    },
    methods: {
      toggleInbox() {
        this.isOpen = !this.isOpen;
      },
      created() {
  if (this.messages.length > 0) {
    this.messages[0].active = true; // Set the first message as active initially
  }
}
    }
  };
  </script>