const admin = require('firebase-admin');

const serviceAccount = require('../serviceAccountKey.json');

admin.initializeApp({
  credential: admin.credential.cert(serviceAccount)
});

const db = admin.firestore();
const docRef = db.collection('test').doc('te');

 docRef.set({
  first: 'Ada',
  last: 'Lovelace',
  born: 1815
});
  
