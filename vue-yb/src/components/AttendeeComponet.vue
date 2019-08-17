<template>
    <tr>
        <td>{{ meeting_id }}</td>
         <td>{{ user_id }}</td>
         <td>{{ attending  }}</td>
        <td v-else>Attendee</td>
        <td>
            <div class="btn btn-sm btn-success"><router-link :to="'/attendee-details/' + this.id">View</router-link></div>
    
        </td>
    </tr>
</template>

<script>
export default {
    data () {
      return {}
    },
    methods: {
      view () {
        // this.$emit('view', this.id);
        console.log('Component Viewing id:' + this.id)
        // this.$router.push({ meeting_id: 'attendee-details', params: { id: 3 } })
        let myRoute = '/attendee-details/3';
        this.$router.push(myRoute);
      },
     
      }
    },
    props: ['id', 'meeting_id', 'user_id', 'attendingattending',]
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
</style>