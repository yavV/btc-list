<template>
  <div id="app">
    <BtcListTable :btcListGridData="btcListGridData"/>
    <BtcListChartLine :btcListChartData="btcListChartData"></BtcListChartLine>
  </div>
</template>

<script lang="ts">
import { Component, Vue } from 'vue-property-decorator';
import BtcListTable from './components/BtcListTable.vue';
import BtcListChartLine from './components/BtcListChartLine.vue';
import axios from "axios";

@Component({
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
        .get('http://172.210.5.10/api/btc/last-transactions-fees',
            {
              headers: {},
              responseType: 'json',
            },
        )
        .then(response => {
          this.btcListGridData = response.data.map(col => [col.min, col.max, col.avg]);
          this.btcListChartData.min = response.data.map(col => col.min);
          this.btcListChartData.max = response.data.map(col => col.max);
          this.btcListChartData.avg = response.data.map(col => col.avg);
        })
        .catch(error => console.log(error));
  }
})

export default class App extends Vue {
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}

</style>
