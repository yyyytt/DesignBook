<template>
  <div>

    <el-popover
      placement="top-start"
      title="プロジェクト検索"
      width="350"
      trigger="hover"
    >
      <el-button
        type="primary"
        @click="setCheck"
      >検索</el-button>
      <el-button @click="resetChecked">リセット</el-button>
      <el-tree
        class="filter-tree pt-3"
        :data="tags"
        show-checkbox
        node-key="id"
        ref="tree"
        accordion
        check-on-click-node
        :check-strictly="true"
      ></el-tree>
      <el-button
        slot="reference"
        style="border:none"
        class="m-0"
      ><i class="fas fa-search fa-lg"></i></el-button>
    </el-popover>

  </div>
</template>

<script>
import { projectTags } from "../projectTags";

export default {
  mixins: [projectTags],
  components: {
    projectTags
  },
  data: function() {
    return {
      check: []
    };
  },
  methods: {
    setCheck() {
      this.check = this.$refs.tree.getCheckedKeys();
      app.$emit("bus-event", this.check);
    },
    resetChecked() {
      this.$refs.tree.setCheckedKeys([]);
      this.check = [];
      // this.$refs.tree.setAttribute('default-expand-all') = false;
    }
    // async keywordSearch() {
    //   await axios
    //     .get("/project/search?q=" + this.keyword)
    //     .then(response => (this.elastic = response.data));
    //   // this.result = this.elastic;
    // }
  }
};
</script>

<style>
.nav-item button {
  background-color: transparent;
}
</style>