<script setup>
import { defineProps, computed } from 'vue';

const props = defineProps({
  content: Object,
});

const user = computed(() => props.content?.role === 'user');
</script>

<template>
  <div id="dynamic-messages" :class="{ user: user }">
    <div v-if="user">
      <div class="message-bubble me">
        <div class="message-bubble-inner">
          <div class="message-avatar"><img src="assets/images/profile/images.png" alt="Sana"></div>
          <div class="message-text" id="msg-undefined">
            <div class="markdown-body">
              <p>Hello</p>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    <div v-else>
      <div class="message-bubble">
        <div class="message-bubble-inner">
          <div class="message-avatar"><img src="assets/images/profile/1139599543.png" alt="AI Chat Bot"></div>
          <div class="message-text" id="msg-1">
            <div class="typing-indicator" style="display: none;">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <div class="markdown-body">
              <p></p>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</template>
