<template>
  <div>
    <BtcListTable :btcListGridData="btcListGridData"/>
    <BtcListChartLine :btcListChartData="btcListChartData"></BtcListChartLine>
  </div>
</template>

<script>
import BtcListTable from './btc-list/BtcListTable.vue';
import BtcListChartLine from './btc-list/BtcListChartLine.vue';
import axios from 'axios';

export default {
  name: 'BtcList',
  components: {
    BtcListTable,
    BtcListChartLine,
  },
  data() {
    return {
      btcListGridData: null,
      btcListChartData: {
        min: null,
        max: null,
        avg: null,
      },
    };
  },
  mounted() {
    axios
        .get(process.env.VUE_APP_BACKEND_API_HOST + process.env.VUE_APP_BTC_ENDPOINT_API + 'last-transactions-fees',
            {
              headers: {},
              responseType: 'json',
            },
        )
        .then((response) => {
          this.btcListGridData = response.data.map(
              (col) => [col.min, col.max, col.avg],
          );
          this.btcListChartData.min = response.data.map((col) => col.min);
          this.btcListChartData.max = response.data.map((col) => col.max);
          this.btcListChartData.avg = response.data.map((col) => col.avg);
        });
  },
};
</script>

<style scoped>

</style>