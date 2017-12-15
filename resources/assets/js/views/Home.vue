<template>
  <div class="container">
    <div class="columns">
      <div class="column">
        <div class="message" v-for="status in statuses">
          <div class="message-content">
            <div class="message-header">
              <h2>{{ status.user.name }} said...</h2>
              <p>{{ postedOn(status) }}</p>
            </div>

            <div
              class="message-body"
              v-text="status.body" />
          </div>
        </div>

        <add-to-stream @completed="addStatus"></add-to-stream>
      </div>
    </div>
  </div>
</template>

<script>
    import moment from 'moment';

    import Status from '../models/Status';

    import addToStream from '../components/addToStream';

    export default {
      components: { addToStream },
      data() {
        return {
          statuses: []
        }
      },

      created() {
        Status.all(statuses => this.statuses = statuses);
      },

      methods: {
        postedOn(status) {
          return status.created_at;
        },

        addStatus(status) {
          this.statuses.unshift(status);

          window.scrollTo(0, 0);
        }
      }
    }
</script>
