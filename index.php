<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Search</title>
    <?php include 'bootstrap.html'?>
</head>

<body>
    <!-- Form for searching food -->
    <h1>Food Search</h1>
    <form class="form" action="" method="get">

        <div class="col-md-2 mb-1">
            <input type="text" name="query" class="form-control" placeholder="Search for food..." value="<?php echo htmlspecialchars($_GET['query'] ?? ''); ?>">
        </div>

        <div class="col-md-2 mb-1">
            <label for="dataType" class="form-label">Data Type:</label>
            <select name="dataType" id="dataType" class="form-select">
                <option value="Branded" <?php if (isset($_GET['dataType']) && $_GET['dataType'] == 'Branded') echo 'selected'; ?>>Branded</option>
                <option value="Foundation" <?php if (isset($_GET['dataType']) && $_GET['dataType'] == 'Foundation') echo 'selected'; ?>>Foundation</option>
                <option value="Survey (FNDDS)" <?php if (isset($_GET['dataType']) && $_GET['dataType'] == 'Survey (FNDDS)') echo 'selected'; ?>>Survey (FNDDS)</option>
                <option value="SR Legacy" <?php if (isset($_GET['dataType']) && $_GET['dataType'] == 'SR Legacy') echo 'selected'; ?>>SR Legacy</option>
            </select>
        </div>

        <div class="col-md-2 mb-1">
            <label for="pageSize" class="form-label">Page Size:</label>
            <input type="number" name="pageSize" class="form-control" placeholder="E.g. 15" value="<?php echo htmlspecialchars($_GET['pageSize'] ?? '15'); ?>">
        </div>

        <div class="col-md-2 mb-1">
            <label for="pageNumber" class="form-label">Page Number:</label>
            <input type="number" name="pageNumber" class="form-control" placeholder="E.g. 1" value="<?php echo htmlspecialchars($_GET['pageNumber'] ?? '1'); ?>">
        </div>

        <div class="col-md-2 mb-1">
            <label for="sortBy" class="form-label">Sort By:</label>
            <select name="sortBy" id="sortBy" class="form-select">
                <option value="dataType.keyword" <?php if (isset($_GET['sortBy']) && $_GET['sortBy'] == 'dataType.keyword') echo 'selected'; ?>>Data Type</option>
                <option value="lowercaseDescription.keyword" <?php if (isset($_GET['sortBy']) && $_GET['sortBy'] == 'lowercaseDescription.keyword') echo 'selected'; ?>>Description</option>
                <option value="fdcId" <?php if (isset($_GET['sortBy']) && $_GET['sortBy'] == 'fdcId') echo 'selected'; ?>>FDC ID</option>
                <option value="publishedDate" <?php if (isset($_GET['sortBy']) && $_GET['sortBy'] == 'publishedDate') echo 'selected'; ?>>Published Date</option>
            </select>
        </div>

        <div class="col-md-2 mb-1">
            <label for="sortOrder" class="form-label">Sort Order:</label>
            <select name="sortOrder" id="sortOrder" class="form-select">
                <option value="asc" <?php if (isset($_GET['sortOrder']) && $_GET['sortOrder'] == 'asc') echo 'selected'; ?>>Ascending</option>
                <option value="desc" <?php if (isset($_GET['sortOrder']) && $_GET['sortOrder'] == 'desc') echo 'selected'; ?>>Descending</option>
            </select>
        </div>

        <div class="col-md-2 mb-1">
            <label for="brandOwner" class="form-label">Brand Owner:</label>
            <input type="text" name="brandOwner" class="form-control" placeholder="E.g. Pepsi" value="<?php echo htmlspecialchars($_GET['brandOwner'] ?? ''); ?>">
        </div>

        <button type="submit" class="btn btn-primary">Search</button>

    </form>

    <div id="results">
        <!-- Include search results from search.php -->
        <br><?php include 'search.php'; ?>
    </div>
</body>

</html>
