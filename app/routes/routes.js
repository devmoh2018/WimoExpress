module.exports = (app) => {
    const tasks = require('../controllers/tasks.js');

    // Create a new Task
    app.post('/tasks', tasks.create);

    // Retrieve all tasks
    app.get('/tasks', tasks.findAll);

    // Retrieve a single Task with taskid
    app.get('/tasks/:taskId', tasks.findOne);

    // Update a Task with taskid
    app.put('/tasks/:taskId', tasks.update);

    // Delete a Task with taskid
    app.delete('/tasks/:taskId', tasks.delete);
}