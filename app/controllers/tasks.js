const Task = require('../models/task.js');

           
// Create and Save a new Task
exports.create = (req, res) => {
    // Validate request
    
    console.log(req);
    if(!req.driverName) {
        return res.status(400).send({
            message: "Task content can not be empty"
        });
    }

    // Create a Task
    const task = new Task({
        driverName: req.body.driverName, 
        courier: req.body.courier,
        deliveryDate: req.body.deliveryDate,
        fromLocation: req.body.fromLocation,
        toLocation: req.body.toLocation,
        status: req.body.status,
        description: req.body.description,
    });

    // Save Task in the database
    task.save()
    .then(data => {
        res.send(data);
    }).catch(err => {
        res.status(500).send({
            message: err.message || "Some error occurred while creating the Note."
        });
    });
};

// Retrieve and return all Tasks from the database.

exports.findAll = (req, res) => {
    
      task.find(function(err, rows, fields) {
	// Do something...
      res.send(rows);
});
};

// Find a single Task with a Taskid
exports.findOne = (req, res) => {

      task.find('first', {where: "id = "+req.params.taskId}, function(err, rows, fields) {
	// Do something...
      res.send(rows);
      task.setSQL(rows);
       console.log(req);
  });
};

// Update a Task identified by the TaskId in the request
exports.update = (req, res) => {
        
    task.find('first', {where: "id = "+req.params.taskId}, function(err, rows, fields) {
        
	// Do something...
    });

};

// Delete a Task with the specified TaskId in the request
exports.delete = (req, res) => {

};