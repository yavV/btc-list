<template>
    <grid
        :cols="cols"
        :rows="this.btcListGridData"
        :pagination="pagination"
        :width="width"
    ></grid>
</template>

<script>
import Grid from 'gridjs-vue';

export default {
  name: 'BtcListTable',
  components: {
    Grid,
  },
  props: {
    'btcListGridData': Array
  },
  data() {
    return {
      cols: ['Min', 'Max', 'AVG'],
      pagination: true,
      width: "50%",
    };
  },
};

</script>

<style scoped>

</style>