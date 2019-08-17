<template>
    <tr>
        <td>{{ title }}</td>
        <td>{{ location }}</td>
        <td>{{ start_date }}</td>
        <td v-else>Meeting</td>
        <td>
            <div class="btn btn-sm btn-success"><router-link :to="'/meeting-details/' + this.id">View</router-link></div>
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
        // this.$router.push({ title: 'meeting-details', params: { id: 3 } })
        let myRoute = '/meeting-details/3';
        this.$router.push(myRoute);
      },
    
    },
    props: ['id', 'title', 'location', 'start_date', 'updated_at']
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
</style>