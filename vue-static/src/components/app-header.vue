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
      class="app-header__form-dialog"
      width="300px">
        <div class="app-header__login-box" v-if="dialogType === 'register'">
          <el-form ref="registerForm" :model="registerForm">
            <el-form-item prop="name">
              <el-input v-model.trim="registerForm.name" placeholder="请输入用户名" size="small"></el-input>
            </el-form-item>
            <el-form-item prop="password">
              <el-input v-model.trim="registerForm.password" placeholder="请输入密码" size="small"></el-input>
            </el-form-item>
            <el-form-item prop="email">
              <el-input v-model.trim="registerForm.email" placeholder="请输入邮箱" size="small"></el-input>
            </el-form-item>
            <el-form-item prop="verify">
              <el-input v-model="registerForm.verify" size="small"></el-input>
              <el-input v-model.trim="registerForm.verify" placeholder="请输入上图中的验证码" size="small"></el-input>
            </el-form-item>
            <el-form-item>
              <el-button type="primary" size="small" class="app-header__form-submit">注册</el-button>
              <el-button type="text" size="mini" class="float-right" @click="dialogType = 'login'">已有账号登录</el-button>
            </el-form-item>
          </el-form>
        </div>
        <div class="app-header__register-box" v-if="dialogType === 'login'">
          <el-form ref="loginForm" :model="loginForm">
            <el-form-item prop="name">
              <el-input v-model.trim="loginForm.name" placeholder="请输入用户名" size="small"></el-input>
            </el-form-item>
            <el-form-item prop="password">
              <el-input v-model.trim="loginForm.password" placeholder="请输入密码" size="small"></el-input>
            </el-form-item>
            <el-form-item>
              <el-button type="primary" size="small" class="app-header__form-submit">登录</el-button>
            </el-form-item>
            <el-form-item>
              <el-button type="text" size="mini" class="float-left" @click="dialogType = 'register'">没有账号？去注册</el-button>
              <el-button type="text" size="mini" class="float-right">忘记密码</el-button>
            </el-form-item>
          </el-form>
        </div>
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
        },
        loginForm: {

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

  .app-header__search-box {
    width: 200px;
    margin-left: 20px;
  }

  .app-header__visitor {
    float: right;
  }

  .app-header__form-dialog .el-form-item {
    margin-bottom: 10px;
  }

  .app-header__search-box >>> .el-input__inner {
    height: 26px;
    padding-left: 25px;
  }

  .app-header >>> .el-dialog__body {
    padding: 0 20px 20px;
  }

  .app-header__form-submit {
    width: 100%;
  }
</style>
