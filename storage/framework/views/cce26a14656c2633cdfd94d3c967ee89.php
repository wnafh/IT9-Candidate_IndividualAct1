<!DOCTYPE html>
<html>
    <head>
        <title>Add Candidates</title>
    </head>
    <body>
        <h1>Add Candidate</h1>
        <form action="<?php echo e(route('candidates.search')); ?>" method="GET">
            <input type="text" name="query" plasceholder="Search">
            <button type="submit">Search</button>
        </form>

        <form method="GET" action="candidates/store">
            <?php echo csrf_field(); ?>

            <label>First Name: </label>
            <input type="text" name="first_name" required><br><br>
            <label>Middle Name: </label>
            <input type="text" name="middle_name" ><br><br>
            <label>Last Name: </label>
            <input type="text" name="last_name" required><br><br>
            <label>Gender: </label>
            <input type="text" name="gender" required><br><br>
            <label>Address: </label>
            <input type="text" name="address" required><br><br>
            <label>Position: </label>
            <input type="text" name="position" required><br><br>
            <label>Party: </label>
            <input type="text" name="party" ><br><br>

            <button type="submit">Save</button>
        </form>
        <hr>

        <h1>Candidate List</h1>
            <table border="1" cellpadding="10">
            <tr>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Position</th>
                <th>Party</th>
            </tr>

            <?php $__currentLoopData = $candidates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $candidate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($candidate->first_name); ?></td>
                <td><?php echo e($candidate->middle_name); ?></td>
                <td><?php echo e($candidate->last_name); ?></td>
                <td><?php echo e($candidate->gender); ?></td>
                <td><?php echo e($candidate->address); ?></td>
                <td><?php echo e($candidate->position); ?></td>
                <td><?php echo e($candidate->party); ?></td>
                <td>
                    <a href="/candidates/edit/<?php echo e($candidate->id); ?>">Edit</a>
                    <a href="/candidates/delete/<?php echo e($candidate->id); ?>" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </body>
</html><?php /**PATH C:\Users\Wenafe\Desktop\laravel\Laravel_IndividualAct1_Magayawa\resources\views/index.blade.php ENDPATH**/ ?>