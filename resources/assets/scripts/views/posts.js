import header from '../modules/header';

export default {
  namespace: 'posts',
  onEnter: function () {
    // このページのcontainerが読み込みを開始した時。
    header.fix();
  },
  onEnterCompleted: function () {

  },
  onLeave: function () {
    // 次のページへのトランジションが始まった時。
  },
  onLeaveCompleted: function () {
    // このページのcontainerが完全に削除された時。
  },
};
