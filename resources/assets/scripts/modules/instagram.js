import Instafeed from 'instafeed.js';
import config from '../config';

export default class Instagram {
  static fetch() {
    var userFeed = new Instafeed({
      get: 'user',
      userId: config.instagram.user_id,
      accessToken: config.instagram.acccess_taken,
      limit: 6,
      resolution: 'low_resolution',
    });
    userFeed.run();
  }
}
