import pagenation from '../modules/pagenation';
import header from '../modules/header';
export default {
  namespace: 'articles',
  onEnter: function () {
    // このページのcontainerが読み込みを開始した時。
    header.fix();
  },
  onEnterCompleted: function () {
    pagenation();
  },
  onLeave: function () {
    // 次のページへのトランジションが始まった時。
  },
  onLeaveCompleted: function () {
    // このページのcontainerが完全に削除された時。
  },
};
