const { render, useState, useEffect } = wp.element

const App = () => {
  
    return (
        <h1>ReactAPP rendered</h1>
    )
}

render(
    <App />,
    document.getElementById('app-wpmesbox')
);