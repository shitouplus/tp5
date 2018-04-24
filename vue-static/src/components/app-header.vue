<template>
  <div class="app-header box-shadow">
    <div class="wrap">
      <a class="app-header__logo theme-color" href="">海饼干</a>
      <el-input v-model="searchContent" class="app-header__search-box">
        <i class="el-icon-search" slot="prefix"></i>
      </el-input>
      <div class="app-header__visitor">
        <el-button type="text">注册</el-button>
        <el-button type="text">登录</el-button>
      </div>
      <div class="app-header__visitor">
        <el-dropdown>
          <span class="el-dropdown-link">
            石头<i class="el-icon-arrow-down el-icon--right"></i>
          </span>
          <el-dropdown-menu slot="dropdown">
            <el-dropdown-item>设置</el-dropdown-item>
            <el-dropdown-item>登出</el-dropdown-item>
          </el-dropdown-menu>
        </el-dropdown>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    name: 'AppHeader',
    data() {
      return {
        searchContent: ''
      }
    }
  }
</script>

<style scoped>
  .app-header {
    line-height: 45px;
    background: #fff;
  }

  .app-header__logo {
  }

  .app-header__search-box {
    width: 200px;
    margin-left: 20px;
  }

  .app-header__visitor {
    float: right;
  }
</style>

<style>
  .app-header__search-box .el-input__inner {
    height: 26px;
    padding-left: 25px;
  }
</style>
