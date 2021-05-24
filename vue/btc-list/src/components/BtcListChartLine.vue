<template>
  <div>
    <TrendChart v-if="this.datasets[0].data !== null && this.datasets[1].data !== null && this.datasets[2].data !== null"
                :datasets="datasets" :grid="grid" :labels="labels" :min="0" :interactive="true" class="btc-list-chart">
    </TrendChart>
    <div class="tooltip-data">
      <div class="tooltip-data-item tooltip-data-item--1">Min</div>
      <div class="tooltip-data-item tooltip-data-item--2">Max</div>
      <div class="tooltip-data-item tooltip-data-item--3">AVG</div>
    </div>

  </div>
</template>

<script>
import TrendChart from 'vue-trend-chart';

export default {
  name: 'BtcListChartLine',
  components: {
    TrendChart,
  },
  props: {
    btcListChartData: Array,
  },
  loaded: false,

  data() {
    return {
      datasets: [
        {
          data: null,
          smooth: true,
          showPoints: true,
          className: 'curve1',
        },
        {
          data: null,
          smooth: true,
          showPoints: true,
          className: 'curve2',
        },
        {
          data: null,
          smooth: true,
          showPoints: true,
          className: 'curve3',
        },
      ],
      grid: {
        verticalLines: true,
        horizontalLines: true,
      },
      labels: {
        yLabels: 10,
        yLabelsTextFormatter: (val) => Math.round(val),
      },
    };
  },
  watch: {
    btcListChartData: {
      immediate: true,
      deep: true,
      handler(val) {
        this.datasets[0].data = val.min;
        this.datasets[1].data = val.max;
        this.datasets[2].data = val.avg;
      },
    },
  },
};
</script>

<style>
* {
  box-sizing: border-box;
}

strong {
  font-weight: 600;
}

body {
  padding: 0;
  margin: 0;
  font-family: "Source Sans Pro", sans-serif;
  color: #2f4053;
}

.btc-list-chart {
  height: 450px;
  width: 100%;
}

.btc-list-chart.vtc {
  height: 450px;
  font-size: 12px;
}

.btc-list-chart .labels {
  stroke: rgba(0, 0, 0, 0.05);
}

.btc-list-chart .curve1.curve .stroke {
  stroke: #fbac91;
  stroke-width: 2;
}

.btc-list-chart .curve1.curve .fill {
  fill: #fbac91;
  opacity: 0.05;
}

.btc-list-chart .curve1.curve .point {
  fill: #fbac91;
  stroke: #fbac91;
}

.btc-list-chart .curve2.curve .stroke {
  stroke: #fbe1b6;
  stroke-width: 2;
}

.btc-list-chart .curve2.curve .point {
  fill: #fbe1b6;
  stroke: #fbe1b6;
}

.btc-list-chart .curve3.curve .stroke {
  stroke: #7fdfd4;
  stroke-width: 2;
}

.btc-list-chart .curve3.curve .point {
  fill: #7fdfd4;
  stroke: #7fdfd4;
}

.tooltip-data {
  display: flex;
}

.tooltip-data-item {
  display: flex;
  align-items: center;
}

.tooltip-data-item:not(:first-child) {
  margin-left: 20px;
}

.tooltip-data-item:before {
  content: "";
  display: block;
  width: 15px;
  height: 15px;
  margin-right: 5px;
}

.tooltip-data-item--1:before {
  background: #fbac91;
}

.tooltip-data-item--2:before {
  background: #fbe1b6;
}

.tooltip-data-item--3:before {
  background: #7fdfd4;
}
</style>