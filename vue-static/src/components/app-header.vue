<template>
  <div class="app-header box-shadow">
    <div class="wrap">
      <a class="app-header__logo theme-color" href="">海饼干</a>
      <el-input v-model="searchContent" class="app-header__search-box">
        <i class="el-icon-search" slot="prefix"></i>
      </el-input>
      <div class="app-header__visitor">
        <el-button type="text" @click="dialogType = 'register'">注册</el-button>
        <el-button type="text" @click="dialogType = 'login'">登录</el-button>
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
    <el-dialog
      :title="dialogTitle"
      :visible.sync="dialogVisible"
      width="400px">
        <div class="app-header__login-box">
          <el-form ref="registerForm" :model="registerForm" label-width="100px">
            <el-form-item label="用户名">
              <el-input v-model="registerForm.name" size="small"></el-input>
            </el-form-item>
            <el-form-item label="密码">
              <el-input v-model="registerForm.password" size="small"></el-input>
            </el-form-item>
            <el-form-item label="电子邮件">
              <el-input v-model="registerForm.email" size="small"></el-input>
            </el-form-item>
            <el-form-item label="你是机器人么">
              <el-input v-model="registerForm.verify" size="small"></el-input>
              <el-input v-model="registerForm.verify" size="small"></el-input>
            </el-form-item>
            <el-form-item label="">
              <el-button type="primary" size="small">注册</el-button>
            </el-form-item>
          </el-form>
        </div>
        <div class="app-header__register-box"></div>
    </el-dialog>
  </div>
</template>

<script>
  export default {
    name: 'AppHeader',
    data() {
      return {
        searchContent: '',
        dialogType: '',
        registerForm: {
          name: '',
          password: '',
          email: '',
          verify: ''
        }
      }
    },
    computed: {
      dialogVisible: {
        get() {
          return this.dialogType !== '';
        },
        set(val) {
          if (!val) {
            this.dialogType = '';
          }
        }
      },
      dialogTitle() {
        const TITLE_MAP = {register: '注册', login: '登录'};
        return TITLE_MAP[this.dialogType];
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

  .el-dialog__body {
    padding-top: 0;
  }
</style>
