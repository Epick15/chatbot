<script setup></script>

<template>

  <Head title="Input Groups - Forms" />

  <!-- Hero -->
  <BasePageHeading title="Input Groups" subtitle="Enrich your form inputs with buttons and extra text content.">
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Forms</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Input Groups</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <!-- With Text -->
    <BaseBlock title="With Text">
      <form @submit.prevent>
        <div class="row">
          <div class="col-lg-4">
            <p class="fs-sm text-muted">
              Prepend or Append Text next to your inputs, useful if you you
              would like to add extra info
            </p>
          </div>
          <div class="col-lg-8 col-xl-5">
            <div class="mb-4">
              <div class="input-group">
                <span class="input-group-text">Name</span>
                <input type="text" class="form-control" id="example-group1-input1" name="example-group1-input1" />
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <input type="email" class="form-control" id="example-group1-input2" name="example-group1-input2" />
                <span class="input-group-text">Email</span>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <span class="input-group-text">$</span>
                <input type="text" class="form-control text-center" id="example-group1-input3"
                  name="example-group1-input3" placeholder="00" />
                <span class="input-group-text">,00</span>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <span class="input-group-text input-group-text-alt">Name</span>
                <input type="text" class="form-control form-control-alt" id="example-group1-input1-alt"
                  name="example-group1-input1-alt" />
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <input type="email" class="form-control form-control-alt" id="example-group1-input2-alt"
                  name="example-group1-input2-alt" />
                <span class="input-group-text input-group-text-alt">Email</span>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <span class="input-group-text input-group-text-alt">$</span>
                <input type="text" class="form-control form-control-alt text-center" id="example-group1-input3-alt"
                  name="example-group1-input3-alt" placeholder="00" />
                <span class="input-group-text input-group-text-alt">,00</span>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <span class="input-group-text">@</span>
                <div class="form-floating">
                  <input type="text" class="form-control" id="example-group1-floating1" name="example-group1-floating1"
                    placeholder="Username" />
                  <label for="example-group1-floating1">Username</label>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <div class="form-floating">
                  <input type="email" class="form-control" id="example-group1-floating2" name="example-group1-floating2"
                    placeholder="Email" />
                  <label for="example-group1-floating2">Email</label>
                </div>
                <span class="input-group-text">@gmail.com</span>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <span class="input-group-text">$</span>
                <div class="form-floating">
                  <input type="text" class="form-control" id="example-group1-floating3" name="example-group1-floating3"
                    placeholder="Ammount" />
                  <label for="example-group1-floating3">Amount</label>
                </div>
                <span class="input-group-text">,00</span>
              </div>
            </div>
          </div>
        </div>
      </form>
    </BaseBlock>
    <!-- END With Text -->

    <!-- With Icons -->
    <BaseBlock title="With Icons">
      <form @submit.prevent>
        <div class="row">
          <div class="col-lg-4">
            <p class="fs-sm text-muted">
              Prepend or Append Icons next to your inputs to visualize the
              context
            </p>
          </div>
          <div class="col-lg-8 col-xl-5">
            <div class="mb-4">
              <div class="input-group">
                <span class="input-group-text">
                  <i class="far fa-user"></i>
                </span>
                <input type="text" class="form-control" id="example-group2-input1" name="example-group2-input1" />
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <input type="email" class="form-control" id="example-group2-input2" name="example-group2-input2" />
                <span class="input-group-text">
                  <i class="far fa-envelope"></i>
                </span>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <span class="input-group-text">
                  <i class="fa fa-euro-sign"></i>
                </span>
                <input type="text" class="form-control text-center" id="example-group2-input3"
                  name="example-group2-input3" placeholder=".." />
                <span class="input-group-text">.00</span>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <span class="input-group-text input-group-text-alt">
                  <i class="far fa-user"></i>
                </span>
                <input type="text" class="form-control form-control-alt" id="example-group2-input1-alt"
                  name="example-group2-input1-alt" />
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <input type="email" class="form-control form-control-alt" id="example-group2-input2-alt"
                  name="example-group2-input2-alt" />
                <span class="input-group-text input-group-text-alt">
                  <i class="far fa-envelope"></i>
                </span>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <span class="input-group-text input-group-text-alt">
                  <i class="fa fa-euro-sign"></i>
                </span>
                <input type="text" class="form-control form-control-alt text-center" id="example-group2-input3-alt"
                  name="example-group2-input3-alt" placeholder=".." />
                <span class="input-group-text input-group-text-alt">
                  <i class="si si-wallet"></i>
                </span>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <span class="input-group-text">
                  <i class="far fa-fw fa-user"></i>
                </span>
                <div class="form-floating">
                  <input type="text" class="form-control" id="example-group2-floating1" name="example-group2-floating1"
                    placeholder="Username" />
                  <label for="example-group2-floating1">Username</label>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <div class="form-floating">
                  <input type="email" class="form-control" id="example-group2-floating2" name="example-group2-floating2"
                    placeholder="Email" />
                  <label for="example-group2-floating2">Email</label>
                </div>
                <span class="input-group-text">
                  <i class="far fa-fw fa-envelope"></i>
                </span>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <span class="input-group-text">
                  <i class="fa fa-fw fa-euro-sign"></i>
                </span>
                <div class="form-floating">
                  <input type="text" class="form-control" id="example-group2-floating3" name="example-group2-floating3"
                    placeholder="Ammount" />
                  <label for="example-group2-floating3">Amount</label>
                </div>
                <span class="input-group-text">.00</span>
              </div>
            </div>
          </div>
        </div>
      </form>
    </BaseBlock>
    <!-- END With Icons -->

    <!-- With Buttons -->
    <BaseBlock title="With Buttons">
      <form @submit.prevent>
        <div class="row">
          <div class="col-lg-4">
            <p class="fs-sm text-muted">
              Prepend or Append Buttons next to your inputs to add related
              actions
            </p>
          </div>
          <div class="col-lg-8 col-xl-5">
            <div class="mb-4">
              <div class="input-group">
                <button type="button" class="btn btn-primary">
                  <i class="fa fa-search me-1"></i> Search
                </button>
                <input type="text" class="form-control" id="example-group3-input1" name="example-group3-input1"
                  placeholder="Name" />
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <input type="email" class="form-control" id="example-group3-input2" name="example-group3-input2"
                  placeholder="Email" />
                <button type="button" class="btn btn-dark">Submit</button>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <button type="button" class="btn btn-primary">
                  <i class="fab fa-facebook-f"></i>
                </button>
                <input type="text" class="form-control" id="example-group3-input3" name="example-group3-input3"
                  placeholder="Search" />
                <button type="button" class="btn btn-info">
                  <i class="fab fa-twitter"></i>
                </button>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <button type="button" class="btn btn-primary">
                  <i class="fa fa-search me-1"></i> Search
                </button>
                <input type="text" class="form-control form-control-alt" id="example-group3-input1-alt"
                  name="example-group3-input1-alt" placeholder="Name" />
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <input type="email" class="form-control form-control-alt" id="example-group3-input2-alt"
                  name="example-group3-input2-alt" placeholder="Email" />
                <button type="button" class="btn btn-dark">Submit</button>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <button type="button" class="btn btn-primary">
                  <i class="fab fa-facebook-f"></i>
                </button>
                <input type="text" class="form-control form-control-alt" id="example-group3-input3-alt"
                  name="example-group3-input3-alt" placeholder="Search" />
                <button type="button" class="btn btn-info">
                  <i class="fab fa-twitter"></i>
                </button>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <button type="button" class="btn btn-alt-primary">
                  <i class="fa fa-search me-1"></i> Search
                </button>
                <input type="text" class="form-control form-control-alt" id="example-group3-input1-alt2"
                  name="example-group3-input1-alt2" placeholder="Name" />
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <input type="email" class="form-control form-control-alt" id="example-group3-input2-alt2"
                  name="example-group3-input2-alt2" placeholder="Email" />
                <button type="button" class="btn btn-secondary">Submit</button>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <button type="button" class="btn btn-alt-primary">
                  <i class="fab fa-facebook-f"></i>
                </button>
                <input type="text" class="form-control form-control-alt" id="example-group3-input3-alt2"
                  name="example-group3-input3-alt2" placeholder="Search" />
                <button type="button" class="btn btn-info">
                  <i class="fab fa-twitter"></i>
                </button>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <button type="button" class="btn btn-primary">
                  <i class="fa fa-search me-1 opacity-50"></i> Search
                </button>
                <div class="form-floating">
                  <input type="text" class="form-control" id="example-group3-floating1" name="example-group3-floating1"
                    placeholder="Username" />
                  <label for="example-group3-floating1">Username</label>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <div class="form-floating">
                  <input type="email" class="form-control" id="example-group3-floating2" name="example-group3-floating2"
                    placeholder="Email" />
                  <label for="example-group3-floating2">Email</label>
                </div>
                <button type="button" class="btn btn-secondary">Submit</button>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <button type="button" class="btn btn-primary">
                  <i class="fab fa-fw fa-facebook-f"></i>
                </button>
                <div class="form-floating">
                  <input type="text" class="form-control" id="example-group3-floating3" name="example-group3-floating3"
                    placeholder="Search" />
                  <label for="example-group3-floating3">Search</label>
                </div>
                <button type="button" class="btn btn-info">
                  <i class="fab fa-fw fa-twitter"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </BaseBlock>
    <!-- END With Buttons -->

    <!-- With Dropdowns -->
    <BaseBlock title="With Dropdowns">
      <form @submit.prevent>
        <div class="row">
          <div class="col-lg-4">
            <p class="fs-sm text-muted">
              Prepend or Append dropdowns next to your inputs
            </p>
          </div>
          <div class="col-lg-8 col-xl-5">
            <div class="mb-4">
              <div class="input-group">
                <button type="button" class="btn btn-primary">Options</button>
                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-bell me-1"></i> News
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-envelope me-1"></i> Messages
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Profile
                  </a>
                </div>
                <input type="text" class="form-control" id="example-group4-input1" name="example-group4-input1"
                  placeholder="Name" aria-label="Text input with dropdown button" />
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <input type="email" class="form-control" id="example-group4-input2" name="example-group4-input2"
                  placeholder="Email" aria-label="Text input with dropdown button" />
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-bell me-1"></i> News
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-envelope me-1"></i> Messages
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Profile
                  </a>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group dropup">
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-bell me-1"></i> News
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-envelope me-1"></i> Messages
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Profile
                  </a>
                </div>
                <input type="text" class="form-control" id="example-group4-input3" name="example-group4-input3"
                  placeholder=".." aria-label="Text input with dropdown button" />
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-bell me-1"></i> News
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-envelope me-1"></i> Messages
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Profile
                  </a>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <button type="button" class="btn btn-dark">Options</button>
                <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split"
                  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-bell me-1"></i> News
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-envelope me-1"></i> Messages
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Profile
                  </a>
                </div>
                <input type="text" class="form-control form-control-alt" id="example-group4-input1-alt"
                  name="example-group4-input1-alt" placeholder="Name" aria-label="Text input with dropdown button" />
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <input type="email" class="form-control form-control-alt" id="example-group4-input2-alt"
                  name="example-group4-input2-alt" placeholder="Email" aria-label="Text input with dropdown button" />
                <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-bell me-1"></i> News
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-envelope me-1"></i> Messages
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Profile
                  </a>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group dropup">
                <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-bell me-1"></i> News
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-envelope me-1"></i> Messages
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Profile
                  </a>
                </div>
                <input type="text" class="form-control form-control-alt" id="example-group4-input3-alt"
                  name="example-group4-input3-alt" placeholder=".." aria-label="Text input with dropdown button" />
                <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-bell me-1"></i> News
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-envelope me-1"></i> Messages
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Profile
                  </a>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <button type="button" class="btn btn-alt-primary">
                  Options
                </button>
                <button type="button" class="btn btn-alt-primary dropdown-toggle dropdown-toggle-split"
                  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-bell me-1"></i> News
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-envelope me-1"></i> Messages
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Profile
                  </a>
                </div>
                <input type="text" class="form-control form-control-alt" id="example-group4-input1-alt2"
                  name="example-group4-input1-alt2" placeholder="Name" aria-label="Text input with dropdown button" />
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <input type="email" class="form-control form-control-alt" id="example-group4-input2-alt2"
                  name="example-group4-input2-alt2" placeholder="Email" aria-label="Text input with dropdown button" />
                <button type="button" class="btn btn-alt-primary dropdown-toggle" data-bs-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-bell me-1"></i> News
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-envelope me-1"></i> Messages
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Profile
                  </a>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group dropup">
                <button type="button" class="btn btn-alt-primary dropdown-toggle" data-bs-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-bell me-1"></i> News
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-envelope me-1"></i> Messages
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Profile
                  </a>
                </div>
                <input type="text" class="form-control form-control-alt" id="example-group4-input3-alt2"
                  name="example-group4-input3-alt2" placeholder=".." aria-label="Text input with dropdown button" />
                <button type="button" class="btn btn-alt-primary dropdown-toggle" data-bs-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-bell me-1"></i> News
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-envelope me-1"></i> Messages
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Profile
                  </a>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <button type="button" class="btn btn-primary">Options</button>
                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-bell me-1"></i> News
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-envelope me-1"></i> Messages
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Profile
                  </a>
                </div>
                <div class="form-floating">
                  <input type="text" class="form-control" id="example-group4-floating1" name="example-group4-floating1"
                    placeholder="Username" />
                  <label for="example-group4-floating1">Username</label>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <div class="form-floating">
                  <input type="email" class="form-control" id="example-group4-floating2" name="example-group4-floating2"
                    placeholder="Email" />
                  <label for="example-group4-floating2">Email</label>
                </div>
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-bell me-1"></i> News
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-envelope me-1"></i> Messages
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Profile
                  </a>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group dropup">
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-bell me-1"></i> News
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-envelope me-1"></i> Messages
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Profile
                  </a>
                </div>
                <div class="form-floating">
                  <input type="text" class="form-control" id="example-group4-floating3" name="example-group4-floating3"
                    placeholder="Search" />
                  <label for="example-group4-floating3">Search</label>
                </div>
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-bell me-1"></i> News
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-envelope me-1"></i> Messages
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Profile
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </BaseBlock>
    <!-- END With Dropdowns -->
  </div>
  <!-- END Page Content -->
</template>
