<style scoped>



</style>

<template>

<div class="">
    <el-tabs v-model="activeName" @tab-click="handleClick">
        <el-tab-pane label="用户管理" name="first">用户管理</el-tab-pane>
        <el-tab-pane label="配置管理" name="second">配置管理</el-tab-pane>
        <el-tab-pane label="角色管理" name="third">角色管理</el-tab-pane>
        <el-tab-pane label="定时任务补偿" name="fourth">定时任务补偿</el-tab-pane>
    </el-tabs>
    <el-carousel indicator-position="outside">
        <el-carousel-item v-for="item in options" :key="item">
            <h3>{{ item.name }}</h3>
        </el-carousel-item>
    </el-carousel>
</div>

</template>

<script>

export default {
  name: 'hello',
  data () {
    return {
      msg: 'Welcome to Your Vue.js App',
      options: [
        {
          name: '234324'
        },
        {
          name: '234324'
        }
      ]
    }
  }
}

</script>
