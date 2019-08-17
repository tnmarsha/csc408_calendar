<template>
<div class="container">
  <div class="content">
    <h1>Meeting</h1>
    <div class="row">
    <meeting-component
            v-for="(meeting, index) in movies"
            v-bind="meeting"
            :index="index"
            :key="meeting.id"
            @view="view"
            
    ></meeting-component>
    </div>
  </div>
</div>
</template>

<script>
    function Meeting ({ id, title, location, start_date, updated_at}) {
        this.id = parseInt(id)
        this.title = title
        this.location = location
        this.start_date = start_date
        this.updated_at = updated_at
    }
    /* Go get the code for the customer-component tag that is in the template */
    import MeetingComponent from '@/components/MeetingComponent.vue'
    export default {
        data () {
            return {
                meetings: []
            }
        },
        methods: {
            read () {
                this.meetings = []
                // had to use someone else web link for the code to work
                window.axios.get('https://calendar.codeflare.tech/api/meetings/').then(({ data }) => {
                    data.forEach(movie => {
                        this.meetings.push(new Movie (movie))
                    })
                })
            },
            view (id) {
            },
            rentals (id) {
            }
        },
        components: {
            MeetingComponent
        },
        created () {
            this.read()
        }
    }
</script>
<style>
  h1{
    text-decoration: underline;
  }
</style>