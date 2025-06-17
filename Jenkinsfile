pipeline {
  agent any

  environment {
    GIT_CREDENTIALS = 'github-creds'
    DEPLOY_HOST = 'itachi@192.168.100.11'
    DEPLOY_PATH = '/var/www/html/yii2-app'
    SSH_KEY = credentials('ssh-to-vm2')  // Add this under Jenkins Credentials if needed
  }

  stages {
    stage('Clone Repo') {
      steps {
        git credentialsId: "${GIT_CREDENTIALS}",
            url: 'https://github.com/kiavin/Koastourphp.git',
            branch: 'main'
      }
    }

    stage('Deploy to VM2') {
      steps {
        sshagent(credentials: ['ssh-to-vm2']) {
          sh """
            ssh -o StrictHostKeyChecking=no ${DEPLOY_HOST} '
              sudo mkdir -p ${DEPLOY_PATH} &&
              sudo rm -rf ${DEPLOY_PATH}/*'
            rsync -avz --delete ./ ${DEPLOY_HOST}:${DEPLOY_PATH}/
          """
        }
      }
    }

    stage('Post-deploy') {
      steps {
        sshagent(credentials: ['ssh-to-vm2']) {
          sh """
            ssh ${DEPLOY_HOST} '
              cd ${DEPLOY_PATH} &&
              composer update
              php yii voyage --interactive=0 &&
              php yii cache/flush-all
            '
          """
        }
      }
    }
  }
}

