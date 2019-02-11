import header from '../modules/header';
import toc from '../modules/toc';

export default {
  namespace: 'posts',
  onEnter: function () {
    // このページのcontainerが読み込みを開始した時。
    header.fix();
  },
  onEnterCompleted: function () {
    toc();
  },
  onLeave: function () {
    // 次のページへのトランジションが始まった時。
  },
  onLeaveCompleted: function () {
    // このページのcontainerが完全に削除された時。
  },
};
