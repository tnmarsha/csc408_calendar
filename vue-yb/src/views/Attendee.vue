<template>
    <div class="about pt-4 pb-3">
        <h1>Attendee</h1>

        <table class="table table-striped">
            <thead>
            <tr>
                <th>meeting_id</th>
                <th>user_id</th>
                <th>attending</th>
                
            </tr>
            </thead>
            <tbody>
            <attendee-component
                    v-for="(attendee, index) in attendee"
                    v-bind="attendee"
                    :index="index"
                    :key="attendee.id"
                    
            ></attendee-component>
            </tbody>
        </table>
    </div>
</template>
<script>
  function Attendee ({ id, meeting_id, user_id, attending }) {
    this.id = parseInt(id)
    this.meeting_id = meeting_id
    this.user_id = user_id
    this.attending = attending
 
  }
  /* Go get the code for the attendee-component tag that is in the template */
  import AttendeeComponent from '@/components/AttendeeComponent.vue'
  export default {
    data () {
      return {
        attendee: []
      }
    },
    methods: {
      read () {
        this.attendee = []
        window.axios.get('https://calendar.codeflare.tech/api/users').then(({ data }) => {
          data.forEach(customer => {
                this.attendee.push(new Customer(customer))
            })
        })
      },
      view (id) {
      },
      rentals (id) {
      }
    },
    components: {
     AttendeeComponent
    },
    created () {
      this.read()
    }
  }
</script>

<style>
</style>